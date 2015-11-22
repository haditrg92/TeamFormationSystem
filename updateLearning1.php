<?php
$idL = $_POST['idL'];
$question = addslashes($_POST['question']);
$category = $_POST['category'];

$result = mysql_query("SELECT * FROM learning_ques WHERE learQues='$question' AND NOT learQuesID='$idL'");
$check = mysql_num_rows($result);

if($check>0){
	echo "<script>alert('That question already in database!');</script>";
	echo "<script>window.location.href='index.php?page=learning'</script>";
}
else{
	mysql_query("UPDATE learning_ques SET learQues='$question', category='$category' WHERE learQuesID='$idL'");
	echo "<script>alert('Update successful...');</script>";
	echo "<script>window.location.href='index.php?page=learning'</script>";
}
?>