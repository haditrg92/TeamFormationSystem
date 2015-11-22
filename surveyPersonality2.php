<?php
$ei1 = $_POST['ei1'];
$si1 = $_POST['si1'];
$tf1 = $_POST['tf1'];
$jp1 = $_POST['jp1'];

$_ei1 = 0;
$_si1 = 0;
$_tf1 = 0;
$_jp1 = 0;

//count for Extraversion or Introversion
for($i=1; $i<=$ei1; $i++){
	$_ei = "EI".$i;
	$_ei1 = $_ei1 + $_POST[$_ei];
}

//count for Sensing or Intuition
for($i=1; $i<=$si1; $i++){
	$_si = "SI".$i;
	$_si1 = $_si1 + $_POST[$_si];
}

//count for Thinking or Feeling
for($i=1; $i<=$tf1; $i++){
	$_tf = "TF".$i;
	$_tf1 = $_tf1 + $_POST[$_tf];
}

//count for Judging or Perceiving
for($i=1; $i<=$jp1; $i++){
	$_jp = "JP".$i;
	$_jp1 = $_jp1 + $_POST[$_jp];
}

$ei1 = $ei1 / 2;
$si1 = $si1 / 2;
$tf1 = $tf1 / 2;
$jp1 = $jp1 / 2;
$personality = "";

//for Extraversion or Introversion
if($_ei1<$ei1){
	$personality = "I";
}
else{
	$personality = "E";
}

//for Sensing or Intuition
if($_si1<$si1){
	$personality = $personality.",N";
}
else{
	$personality = $personality.",S";
}

//for Thinking or Feeling
if($_tf1<$tf1){
	$personality = $personality.",T";
}
else{
	$personality = $personality.",F";
}

//for Judging or Perceiving
if($_jp1<$jp1){
	$personality = $personality.",P";
}
else{
	$personality = $personality.",J";
}

$res = mysql_query("SELECT * FROM current_semester");
$row = mysql_fetch_array($res);
$semesterID = $row['semesterID'];
$userID = $_SESSION['userID'];

mysql_query("INSERT INTO personality (studentID, semesterID, personalStatus) VALUES ('$userID', '$semesterID', '$personality')");
echo "<script>alert('Insert successful...');</script>";
echo "<script>window.location.href='index.php?page=sAnalysisPersonality'</script>";

?>