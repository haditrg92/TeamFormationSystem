<?php
$question = addslashes($_POST['question']);
$category = $_POST['category'];

$result = mysql_query("SELECT * FROM learning_ques WHERE learQues='$question'");
$check = mysql_num_rows($result);

if($check>0){
	echo "<script>alert('That question already in database!');</script>";
	echo "<script>window.location.href='index.php?page=learning'</script>";
}
else{
	mysql_query("INSERT INTO learning_ques (learQues, category) VALUES ('$question', '$category')");
	echo "<script>alert('Insert successful...');</script>";
	echo "<script>window.location.href='index.php?page=learning'</script>";
}
?>