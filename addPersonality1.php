<?php
$question = addslashes($_POST['question']);
$category = $_POST['category'];

$result = mysql_query("SELECT * FROM personality_ques WHERE perQues='$question'");
$check = mysql_num_rows($result);

if($check>0){
	echo "<script>alert('That question already in database!');</script>";
	echo "<script>window.location.href='index.php?page=personality'</script>";
}
else{
	mysql_query("INSERT INTO personality_ques (perQues, perQuesCategory) VALUES ('$question', '$category')");
	echo "<script>alert('Insert successful...');</script>";
	echo "<script>window.location.href='index.php?page=personality'</script>";
}
?>