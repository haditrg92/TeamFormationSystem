<?php
$id = $_GET['id'];

$userID = $_SESSION['userID'];

$result = mysql_query("SELECT * FROM course_lecturer WHERE course_lecturer_ID='$id'");
$row = mysql_fetch_array($result);

if($row['generate']==1){
	echo "<script>alert('Cannot delete this course register because its already generate!');</script>";
	echo "<script>window.location.href='index.php?page=sCourseRegister'</script>";
}
else{
	mysql_query("DELETE FROM course_student WHERE course_lecturer_ID='$id' AND studentID='$userID'");
	echo "<script>alert('Delete successful...');</script>";
	echo "<script>window.location.href='index.php?page=sCourseRegister'</script>";
}
?>