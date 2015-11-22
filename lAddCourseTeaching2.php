<?php
$courseID = $_GET['id'];

$result = mysql_query("SELECT * FROM current_semester");
$row = mysql_fetch_array($result);

$semesterID = $row['semesterID'];
$userID = $_SESSION['userID'];

$result1 = mysql_query("SELECT * FROM course_lecturer WHERE courseID='$courseID' AND lecturerID='$userID' AND semesterID='$semesterID'");
$check = mysql_num_rows($result1);

if($check>0){
	echo "<script>alert('That course already in database!');</script>";
	echo "<script>window.location.href='index.php?page=lCourseTeaching'</script>";
}
else{
	mysql_query("INSERT INTO course_lecturer (courseID, lecturerID, semesterID) VALUES ('$courseID', '$userID', '$semesterID')");
	echo "<script>alert('Insert successful...');</script>";
	echo "<script>window.location.href='index.php?page=lCourseTeaching'</script>";
}
?>
