<?php
$studentID = $_SESSION['userID'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$cgpa = $_POST['cgpa'];
$gender = $_POST['gender'];
$intake = $_POST['intake'];
$background = $_POST['background'];
$class = $_POST['class'];

	mysql_query("UPDATE student SET studentName='$name', studentPhone='$phone', CGPA='$cgpa', 
		gender='$gender', backgroundEdu='$background', intake='$intake', classID='$class' WHERE studentID='$studentID'");
	echo "<script>alert('Update successful...');</script>";
	echo "<script>window.location.href='index.php?page=sProfile'</script>";

?>