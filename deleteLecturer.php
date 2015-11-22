<?php
$idL = $_GET['idL'];


$result = mysql_query("SELECT * FROM course_lecturer WHERE lecturerID='$idL'");
$check = mysql_num_rows($result);

if($check>0){
	echo "<script>alert('Cannot delete this lecturer because it had related with other table!');</script>";
	echo "<script>window.location.href='index.php?page=lecturer'</script>";
}
else{
	mysql_query("DELETE FROM lecturer WHERE lecturerID='$idL'");
	echo "<script>alert('Delete successful...');</script>";
	echo "<script>window.location.href='index.php?page=lecturer'</script>";
}
?>