<?php
$idC = $_GET['idC'];


$result = mysql_query("SELECT * FROM student WHERE classID='$idC'");
$check = mysql_num_rows($result);

if($check>0){
	echo "<script>alert('Cannot delete this class because it had student in this class!');</script>";
	echo "<script>window.location.href='index.php?page=class'</script>";
}
else{
	mysql_query("DELETE FROM class WHERE classID='$idC'");
	echo "<script>alert('Delete successful...');</script>";
	echo "<script>window.location.href='index.php?page=class'</script>";
}
?>