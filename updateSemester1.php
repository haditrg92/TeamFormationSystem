<?php
$semesterID = $_POST['semesterID'];
$semester = $_POST['semester'];
$session = $_POST['session'];

$result = mysql_query("SELECT * FROM semester WHERE semesterNo='$semester' AND semesterSession='$session' AND NOT semesterID='$semesterID'");
$check = mysql_num_rows($result);

if($check>0){
	echo "<script>alert('That semester already in database!');</script>";
	echo "<script>window.location.href='index.php?page=semester'</script>";
}
else{
	mysql_query("UPDATE semester SET semesterNo='$semester', semesterSession='$session' WHERE semesterID='$semesterID'");
	echo "<script>alert('Update successful...');</script>";
	echo "<script>window.location.href='index.php?page=semester'</script>";
}
?>