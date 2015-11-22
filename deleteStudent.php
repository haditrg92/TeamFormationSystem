<?php
$idS = $_GET['idS'];

$result = mysql_query("SELECT * FROM course_student WHERE studentID='$idS'");
$check = mysql_num_rows($result);

$result1 = mysql_query("SELECT * FROM student WHERE studentID='$idS'");
$row = mysql_fetch_array($result1);

if($check>0){
	echo "<script>alert('Cannot delete this student because it had related with other table!');</script>";
	echo "<script>window.location.href='index.php?page=student1&idC=".$row['classID']."'</script>";
}
else{
	mysql_query("DELETE FROM student WHERE studentID='$idS'");
	echo "<script>alert('Delete successful...');</script>";
	echo "<script>window.location.href='index.php?page=student1&idC=".$row['classID']."'</script>";
}
?>