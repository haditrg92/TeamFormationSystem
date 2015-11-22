<?php
$courseID = $_POST['courseID'];
$courseName = $_POST['courseName'];

	mysql_query("UPDATE course SET courseName='$courseName' WHERE courseID='$courseID'");
	echo "<script>alert('Update successful...');</script>";
	echo "<script>window.location.href='index.php?page=course'</script>";

?>