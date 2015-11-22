<?php
$lecturerID = $_SESSION['userID'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$office = $_POST['office'];

	mysql_query("UPDATE lecturer SET lecturerName='$name', lecturerPhone='$phone', officePhone='$office' WHERE lecturerID='$lecturerID'");
	echo "<script>alert('Update successful...');</script>";
	echo "<script>window.location.href='index.php?page=lProfile'</script>";

?>