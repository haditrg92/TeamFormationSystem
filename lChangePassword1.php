<?php
$old = md5($_POST['old']);
$new = md5($_POST['new']);

$userID = $_SESSION['userID'];

$result = mysql_query("SELECT * FROM lecturer WHERE lecturerID='$userID' AND password='$old'");
$check = mysql_num_rows($result);

if($check==0){
	echo "<script>alert('Old password do not match!');</script>";
	echo "<script>window.location.href='index.php?page=lChangePassword'</script>";
}
else{
	mysql_query("UPDATE lecturer SET password='$new' WHERE lecturerID='$userID'");
	echo "<script>alert('Update successful...');</script>";
	echo "<script>window.location.href='index.php?page=lProfile'</script>";
}
?>