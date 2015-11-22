<?php
$course_lecturer_ID = $_GET['id'];

$userID = $_SESSION['userID'];

$result1 = mysql_query("SELECT * FROM course_student WHERE course_lecturer_ID='$course_lecturer_ID' AND studentID='$userID'");
$check = mysql_num_rows($result1);

if($check>0){
	echo "<script>alert('That course already in database!');</script>";
	echo "<script>window.location.href='index.php?page=sCourseRegister'</script>";
}
else{
	mysql_query("INSERT INTO course_student (course_lecturer_ID, studentID) VALUES ('$course_lecturer_ID', '$userID')");
	echo "<script>alert('Insert successful...');</script>";
	echo "<script>window.location.href='index.php?page=sCourseRegister'</script>";
}
?>
