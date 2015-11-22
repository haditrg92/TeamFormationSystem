<?php
$idP = $_POST['idP'];
$question = addslashes($_POST['question']);
$category = $_POST['category'];

$result = mysql_query("SELECT * FROM personality_ques WHERE perQues='$question' AND NOT perQuesID='$idP'");
$check = mysql_num_rows($result);

if($check>0){
	echo "<script>alert('That question already in database!');</script>";
	echo "<script>window.location.href='index.php?page=personality'</script>";
}
else{
	mysql_query("UPDATE personality_ques SET perQues='$question', perQuesCategory='$category' WHERE perQuesID='$idP'");
	echo "<script>alert('Update successful...');</script>";
	echo "<script>window.location.href='index.php?page=personality'</script>";
}
?>