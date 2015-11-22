<?php
$idP = $_GET['idP'];

mysql_query("DELETE FROM personality_ques WHERE perQuesID='$idP'");

echo "<script>alert('Delete successful...');</script>";
echo "<script>window.location.href='index.php?page=personality'</script>";
?>