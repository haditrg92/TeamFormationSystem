<?php
$idS = $_GET['idS'];


$result = mysql_query("SELECT * FROM current_semester WHERE semesterID='$idS'");
$check = mysql_num_rows($result);

if($check>0){
	echo "<script>alert('Cannot delete this semester because its current semester!');</script>";
	echo "<script>window.location.href='index.php?page=semester'</script>";
}
else{
	mysql_query("DELETE FROM semester WHERE semesterID='$idS'");
	echo "<script>alert('Delete successful...');</script>";
	echo "<script>window.location.href='index.php?page=semester'</script>";
}
?>