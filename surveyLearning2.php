<?php
$bil = $_POST['bil'];
$v = $_POST['v'];
$a = $_POST['a'];
$k = $_POST['k'];
$_v = 0;
$_a = 0;
$_k = 0;

// count for visual
for ($i=1; $i<=$v; $i++) { 
	$_visual = "visual".$i;
	$_v = $_v + $_POST[$_visual];
}

// count for auditory
for ($i=1; $i<=$v; $i++) { 
	$_auditory = "auditory".$i;
	$_a = $_a + $_POST[$_auditory];
}

// count for kinesthetic
for ($i=1; $i<=$v; $i++) { 
	$_kinesthetic = "kinesthetic".$i;
	$_k = $_k + $_POST[$_kinesthetic];
}

// echo "Visual = ".$_v;
// echo "<br>Auditory = ".$_a;
// echo "<br>Kinesthetic = ".$_k;

$status = "unknown";
if(($_v>$_a)&&($_v>$_k)){
	$status = "Visual";
}
elseif(($_a>$_v)&&($_a>$_k)){
	$status = "Auditory";
}
elseif(($_k>$_v)&&($_k>$_a)){
	$status = "Kinesthetic";
}
else{
	$status = "Visual";
}
// echo $status;

$res = mysql_query("SELECT * FROM current_semester");
$row = mysql_fetch_array($res);
$semesterID = $row['semesterID'];
$userID = $_SESSION['userID'];

mysql_query("INSERT INTO learning_style (studentID, semesterID, learningStatus) VALUES ('$userID', '$semesterID', '$status')");
echo "<script>alert('Insert successful...');</script>";
echo "<script>window.location.href='index.php?page=sAnalysisLearning'</script>";

?>