<?php
$classID = $_POST['classID'];
$className = $_POST['className'];
$batch = $_POST['batch'];
$semester = $_POST['semester'];
$status = $_POST['status'];

$result = mysql_query("SELECT * FROM class WHERE className='$className' AND batch='$batch' AND NOT classID='$classID'");
$check = mysql_num_rows($result);

if($check>0){
	echo "<script>alert('That class already in database!');</script>";
	echo "<script>window.location.href='index.php?page=class'</script>";
}
else{
	mysql_query("UPDATE class SET className='$className', batch='$batch', semesterID='$semester', status='$status' WHERE classID='$classID'");
	echo "<script>alert('Update successful...');</script>";
	echo "<script>window.location.href='index.php?page=class'</script>";
}
?>