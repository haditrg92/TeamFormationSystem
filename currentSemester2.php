<?php
$semester = $_POST['semester'];

mysql_query("UPDATE current_semester SET semesterID='$semester'");
echo "<script>alert('Update successful...');</script>";
echo "<script>window.location.href='index.php?page=currentSemester'</script>";

?>