<?php
session_start();
include 'database.php';
$userID = $_POST['userID'];
$password = $_POST['password'];

if($userID=="admin"&&$password=="admin"){
	$_SESSION['user'] = "admin";
	header("Location: index.php");
}

else{
	$password = md5($password);

	$result = mysql_query("SELECT * FROM student WHERE studentID='$userID' AND password='$password'");
	$row = mysql_fetch_array($result);
	$check = mysql_num_rows($result);

	if($check>0){
		$_SESSION['user'] = "student";
		$_SESSION['userID'] = $row['studentID'];
		header("Location: index.php");
	}
	else{
		$result = mysql_query("SELECT * FROM lecturer WHERE lecturerID='$userID' AND password='$password'");
		$row = mysql_fetch_array($result);
		$check = mysql_num_rows($result);

		if($check>0){
			$_SESSION['userID'] = $row['lecturerID'];
			$_SESSION['user'] = "lecturer";
			header("Location: index.php");
		}
		else{
			header("Location: login.php?error=1");
		}
	}
}
?>