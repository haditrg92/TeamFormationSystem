<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Update Learning Style Question</h1>
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
		<form action="index.php?page=updateLearning1" method="post">
		<input type="hidden" name="idL" value="<?php echo $row['learQuesID']; ?>">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Question :</b>
				</div>
				<div class="col-lg-7">
					<textarea name="question" class="form-control"><?php echo $row['learQues']; ?></textarea>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Category :</b>
				</div>
				<div class="col-lg-3">
					<select name="category" class="form-control" required>
						<option value="">-Please Select Category-</option>
						<option <?php if($row['category']=="Visual") echo "selected"; ?> value="Visual">Visual</option>
						<option <?php if($row['category']=="Auditory") echo "selected"; ?> value="Auditory">Auditory</option>
						<option <?php if($row['category']=="Kinesthetic") echo "selected"; ?> value="Kinesthetic">Kinesthetic</option>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<a href="index.php?page=learning" class="btn btn-warning">Back</a>
					<input type="submit" class="btn btn-success" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
			</div>
		</form>
	</div>
</div>