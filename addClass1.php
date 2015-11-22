<?php
$className = $_POST['className'];
$batch = $_POST['batch'];
$semester = $_POST['semester'];
$status = "Active";

$result = mysql_query("SELECT * FROM class WHERE className='$className' AND batch='$batch'");
$check = mysql_num_rows($result);

if($check>0){
	echo "<script>alert('That class already in database!');</script>";
	echo "<script>window.location.href='index.php?page=class'</script>";
}
else{
	mysql_query("INSERT INTO class VALUES ('', '$className', '$batch', '$status', '$semester')");
	echo "<script>alert('Insert successful...');</script>";
	echo "<script>window.location.href='index.php?page=class'</script>";
}
?>