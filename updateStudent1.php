<?php
$studentID = $_POST['studentID'];
$idC = $_POST['idC'];
$studentName = $_POST['studentName'];
$gender = $_POST['gender'];
$class = $_POST['class'];

	mysql_query("UPDATE student SET studentName='$studentName', gender='$gender', classID='$class' WHERE studentID='$studentID'");
	echo "<script>alert('Update successful...');</script>";
	echo "<script>window.location.href='index.php?page=student1&idC=$idC'</script>";

?>