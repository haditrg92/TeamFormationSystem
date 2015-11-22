<?php
$classID = $_POST['classID'];
$matricNo = $_POST['matricNo'];
$studentName = $_POST['studentName'];
$gender = $_POST['gender'];

$result = mysql_query("SELECT * FROM student WHERE studentID='$matricNo'");
$check = mysql_num_rows($result);

if($check>0){
	echo "<script>alert('That student already in database!');</script>";
	echo "<script>window.location.href='index.php?page=student1&idC=$classID'</script>";
}
else{
	mysql_query("INSERT INTO student (studentID, studentName, gender, classID) VALUES ('$matricNo', '$studentName', '$gender', '$classID')");
	if($gender=="Male"){
		mysql_query("INSERT INTO profilepic VALUES ('$staffNo', 'images/Profile_Picture/profileMale.png')");
	}
	else{
		mysql_query("INSERT INTO profilepic VALUES ('$staffNo', 'images/Profile_Picture/profileFemale.png')");
	}
	echo "<script>alert('Insert successful...');</script>";
	echo "<script>window.location.href='index.php?page=student1&idC=$classID'</script>";
}
?>