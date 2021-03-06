<div id="page-wrapper">
	<div class="container-fluid">
<?php
// include 'database.php';
function pr($x){
	echo "<pre>";
	print_r($x);
	echo "</pre>";
}

$course_lecturer_ID = $_POST['CLid'];
$group = $_POST['group'];

//current semester
$_res = mysql_query("SELECT * FROM current_semester");
$_row = mysql_fetch_array($_res);
$currentSemester = $_row['semesterID'];

$result = mysql_query("SELECT * FROM course_student 
						JOIN course_lecturer ON course_lecturer.course_lecturer_ID=course_student.course_lecturer_ID 
						JOIN student ON student.studentID=course_student.studentID 
						WHERE course_student.course_lecturer_ID='$course_lecturer_ID'");
$count = mysql_num_rows($result);

//list variable
$calc = array();
$_personality = "";
$_personalityCount = 0;
$i = 0;
$studentScore = array();
$max = 0;
$min = 0;

while($row = mysql_fetch_array($result)){
	//Student detail
	$calc[$i]["No Matric"] = $row['studentID'];
	$calc[$i]["Name"] = $row['studentName'];

	//CGPA
	if(!empty($_POST['CGPA'])){
		if($row['CGPA']>=3.67&&$row['CGPA']<=4){
			$calc[$i]["CGPA"] = 0.3333 * 0.4;
		}
		elseif($row['CGPA']>=3.00&&$row['CGPA']<=3.66){
			$calc[$i]["CGPA"] = 0.3333 * 0.3;
		}
		elseif($row['CGPA']>=2.00&&$row['CGPA']<=2.99){
			$calc[$i]["CGPA"] = 0.3333 * 0.2;
		}
		else{
			$calc[$i]["CGPA"] = 0.3333 * 0.1;
		}
	}
	else{
		$calc[$i]["CGPA"] = 0;
	}

	//Gender
	if(!empty($_POST['gender'])){
		if($row['gender']=="Male"){
			$calc[$i]["Gender"] = 0.2667 * 0.667;
		}
		else{
			$calc[$i]["Gender"] = 0.2667 * 0.333;
		}
	}
	else{
		$calc[$i]["Gender"] = 0;
	}

	//Education Background
	if(!empty($_POST['eduBack'])){
		if($row['backgroundEdu']=="Diploma"){
			$calc[$i]["Education Background"] = 0.0667 * 0.5145;
		}
		elseif($row['backgroundEdu']=="Matric"){
			$calc[$i]["Education Background"] = 0.0667 * 0.3140;
		}
		else{
			$calc[$i]["Education Background"] = 0.0667 * 0.1715;
		}
	}
	else{
		$calc[$i]["Education Background"] = 0;
	}

	//Learning Style
	if(!empty($_POST['learning'])){
		$res = mysql_query("SELECT * FROM learning_style WHERE semesterID='$currentSemester' AND studentID='".$row['studentID']."'");
		$ro = mysql_fetch_array($res);
		$chk = mysql_num_rows($res);
		if($chk>0){
			if($ro['learningStatus']=="Kinesthetic"){
				$calc[$i]["Learning Style"] = 0.1333 * 0.5145;
			}
			elseif($ro['learningStatus']=="Visual"){
				$calc[$i]["Learning Style"] = 0.1333 * 0.3140;
			}
			else{
				$calc[$i]["Learning Style"] = 0.1333 * 0.1715;
			}
		}
		else{
			$calc[$i]["Learning Style"] = 0.1333 * 0.1715;
		}
	}
	else{
		$calc[$i]["Learning Style"] = 0;
	}

	//Personality Type
	if(!empty($_POST['personality'])){
		$res1 = mysql_query("SELECT * FROM personality WHERE semesterID='$currentSemester' AND studentID='".$row['studentID']."'");
		$ro1 = mysql_fetch_array($res1);
		$chk1 = mysql_num_rows($res1);
		if($chk1>0){
			$_personality = explode(',', $ro1['personalStatus']);
			foreach ($_personality as $key => $value) {
				//Extrovert	Introvert
				if($key==0){
					if($value=="E"){
						$_personalityCount = 0.2/4 * 0.667;
					}
					elseif($value=="I"){
						$_personalityCount = 0.2/4 * 0.333;
					}
				}
				//Intuition	Sensing
				elseif($key==1){
					if($value=="N"){
						$_personalityCount = $_personalityCount + (0.2/4 * 0.667);
					}
					elseif($value=="S"){
						$_personalityCount = $_personalityCount + (0.2/4 * 0.333);
					}
				}
				//Thinking	Feeling
				elseif($key==2){
					if($value=="T"){
						$_personalityCount = $_personalityCount + (0.2/4 * 0.667);
					}
					elseif($value=="F"){
						$_personalityCount = $_personalityCount + (0.2/4 * 0.333);
					}
				}
				//Judging	Perceiving
				elseif($key==3){
					if($value=="J"){
						$_personalityCount = $_personalityCount + (0.2/4 * 0.667);
					}
					elseif($value=="P"){
						$_personalityCount = $_personalityCount + (0.2/4 * 0.333);
					}
				}
			}
			$calc[$i]["Personality Type"] = $_personalityCount;
		}
		else{
			$calc[$i]["Personality Type"] = (0.2/4 * 0.333) + (0.2/4 * 0.333) + (0.2/4 * 0.333) + (0.2/4 * 0.333);
		}
	}
	else{
		$calc[$i]["Personality Type"] = 0;
	}


	//Total
	$calc[$i]["Total"] = $calc[$i]["CGPA"] + $calc[$i]["Gender"] + $calc[$i]["Education Background"] + $calc[$i]["Learning Style"] + $calc[$i]["Personality Type"];

	//calculate Max Total
	if($max<$calc[$i]["Total"]){
		$max = $calc[$i]["Total"];
	}

	$i++;
}


function normalize($value, $min, $max){
	$normalized = ($value-$min)/($max-$min);
	return $normalized;
}



for($i=0; $i<$count; $i++){

	$calc[$i]["Normalize"] = normalize($calc[$i]["Total"], 0, $max);

	//Student Score
	if(($calc[$i]["Normalize"]>=0.8)&&($calc[$i]["Normalize"]<=1.0)){
		$calc[$i]["StudentScore"] = 1;
	}
	elseif($calc[$i]["Normalize"]>=0.6&&$calc[$i]["Normalize"]<0.8){
		$calc[$i]["StudentScore"] = 2;
	}
	elseif($calc[$i]["Normalize"]>=0.4&&$calc[$i]["Normalize"]<0.6){
		$calc[$i]["StudentScore"] = 3;
	}
	elseif($calc[$i]["Normalize"]>=0.2&&$calc[$i]["Normalize"]<0.4){
		$calc[$i]["StudentScore"] = 4;
	}
	else{
		$calc[$i]["StudentScore"] = 5;
	}
	
	$studentScore[$calc[$i]["StudentScore"]][$calc[$i]['No Matric']] = $calc[$i]['Name'];

}
// pr($calc); die;
	// pr($calc);
	// pr($studentScore);

$group = ceil($count/$group);
// pr($group);

$x = 0;
$y = 0;
$grouping = array();

for($i=1; $i<=5; $i++){
	if(!empty($studentScore[$i])){	
		foreach ($studentScore[$i] as $noMatric => $name) {
			$grouping[$y][$x] = $name;
			mysql_query("UPDATE course_student SET groups='$y' WHERE studentID='$noMatric' AND course_lecturer_ID='$course_lecturer_ID'");
			if($y<$group-1){
				$y++;
			}
			else{
				$y = 0;
				$x++;

			}
		}
	}	
}

mysql_query("UPDATE course_lecturer SET generate='1' WHERE course_lecturer_ID='$course_lecturer_ID'");

header("Location: index.php?page=lViewGroupFormation&CLid=$course_lecturer_ID");
// pr($grouping);
?>
</div></div>