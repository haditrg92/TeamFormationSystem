<?php
$id = $_GET['id'];

$result = mysql_query("SELECT * FROM course_student WHERE course_lecturer_ID='$id'");
$check = mysql_num_rows($result);

if($check>0){
	echo "<script>alert('Cannot delete this course teaching because it had related with other table!');</script>";
	echo "<script>window.location.href='index.php?page=lCourseTeaching'</script>";
}
else{
	mysql_query("DELETE FROM course_lecturer WHERE course_lecturer_ID='$id'");
	echo "<script>alert('Delete successful...');</script>";
	echo "<script>window.location.href='index.php?page=lCourseTeaching'</script>";
}
?>