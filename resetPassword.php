<?php
if(isset($_GET['idL'])){
	$pwd = md5("abc123");

	mysql_query("UPDATE lecturer SET password='$pwd' WHERE lecturerID='".$_GET['idL']."'");
	echo "<script>alert('Reset password successful...');</script>";
	echo "<script>window.location.href='index.php?page=lecturer'</script>";
}
elseif(isset($_GET['idS'])){
	$pwd = md5("abc123");

	mysql_query("UPDATE student SET password='$pwd' WHERE studentID='".$_GET['idS']."'");
	echo "<script>alert('Reset password successful...');</script>";
	echo "<script>window.location.href='index.php?page=student1&idC=".$_GET['idC']."'</script>";
}
else{
	echo "<script>window.location.href='index.php?page=homepage'</script>";
}
?>