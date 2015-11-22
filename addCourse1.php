<?php
$courseID = $_POST['courseID'];
$courseName = $_POST['courseName'];

$result = mysql_query("SELECT * FROM course WHERE courseID='$courseID'");
$check = mysql_num_rows($result);

if($check>0){
	echo "<script>alert('That course already in database!');</script>";
	echo "<script>window.location.href='index.php?page=course'</script>";
}
else{
	mysql_query("INSERT INTO course (courseID, courseName) VALUES ('$courseID', '$courseName')");
	echo "<script>alert('Insert successful...');</script>";
	echo "<script>window.location.href='index.php?page=course'</script>";
}
?>