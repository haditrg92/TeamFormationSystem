<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">View Learning Style Question</h1>
			</div>
		</div>
		<?php
		$idL = $_GET['idL'];
		$result = mysql_query("SELECT * FROM learning_ques WHERE learQuesID='$idL'");
		$row = mysql_fetch_array($result);
		?>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=learning" class="btn btn-primary">List Learning Style Question</a>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Question :</b>
			</div>
			<div class="col-lg-7">
				<?php echo $row['learQues']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Category :</b>
			</div>
			<div class="col-lg-7">
				<?php echo $row['category']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-4 col-md-offset-3">
				<a href="index.php?page=learning" class="btn btn-warning">Back</a>
			</div>
		</div>
	</div>
</div>