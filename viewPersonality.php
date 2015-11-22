<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">View Personality Type Question</h1>
			</div>
		</div>
		<?php
		$idP = $_GET['idP'];
		$result = mysql_query("SELECT * FROM personality_ques WHERE perQuesID='$idP'");
		$row = mysql_fetch_array($result);
		?>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=personality" class="btn btn-primary">List Personality Type Question</a>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Question :</b>
			</div>
			<div class="col-lg-7">
				<?php echo $row['perQues']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Category :</b>
			</div>
			<div class="col-lg-7">
				<?php echo $row['perQuesCategory']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-4 col-md-offset-3">
				<a href="index.php?page=personality" class="btn btn-warning">Back</a>
			</div>
		</div>
	</div>
</div>