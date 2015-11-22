<?php
$idC = $_GET['idC'];

mysql_query("DELETE FROM course WHERE courseID='$idC'");

echo "<script>alert('Delete successful...');</script>";
echo "<script>window.location.href='index.php?page=course'</script>";
?>