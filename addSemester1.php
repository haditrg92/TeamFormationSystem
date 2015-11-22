<?php
$semester = $_POST['semester'];
$session = $_POST['session'];


$result = mysql_query("SELECT * FROM semester WHERE semesterNo='$semester' AND semesterSession='$session'");
$check = mysql_num_rows($result);

if($check>0){
	echo "<script>alert('That semester already in database!');</script>";
	echo "<script>window.location.href='index.php?page=semester'</script>";
}
else{
	mysql_query("INSERT INTO semester VALUES ('', '$semester', '$session')");
	echo "<script>alert('Insert successful...');</script>";
	echo "<script>window.location.href='index.php?page=semester'</script>";
}
?>