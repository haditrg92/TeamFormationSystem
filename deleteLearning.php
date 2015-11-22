<?php
$idL = $_GET['idL'];

mysql_query("DELETE FROM learning_ques WHERE learQuesID='$idL'");

echo "<script>alert('Delete successful...');</script>";
echo "<script>window.location.href='index.php?page=learning'</script>";
?>