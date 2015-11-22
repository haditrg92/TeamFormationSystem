<?php
$lecturerID = $_POST['lecturerID'];
$lecturerName = $_POST['lecturerName'];

	mysql_query("UPDATE lecturer SET lecturerName='$lecturerName' WHERE lecturerID='$lecturerID'");
	echo "<script>alert('Update successful...');</script>";
	echo "<script>window.location.href='index.php?page=lecturer'</script>";

?>