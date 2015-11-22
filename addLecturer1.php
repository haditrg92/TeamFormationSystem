<?php
$staffNo = $_POST['staffNo'];
$lecturerName = $_POST['lecturerName'];

$result = mysql_query("SELECT * FROM lecturer WHERE lecturerID='$staffNo'");
$check = mysql_num_rows($result);

if($check>0){
	echo "<script>alert('That staff already in database!');</script>";
	echo "<script>window.location.href='index.php?page=lecturer'</script>";
}
else{
	mysql_query("INSERT INTO lecturer (lecturerID, lecturerName) VALUES ('$staffNo', '$lecturerName')");
	mysql_query("INSERT INTO profilepic VALUES ('$staffNo', 'images/Profile_Picture/profileMale.png')");
	echo "<script>alert('Insert successful...');</script>";
	echo "<script>window.location.href='index.php?page=lecturer'</script>";
}
?>