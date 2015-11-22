<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Update Personality Type Question</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=personality" class="btn btn-primary">List Personality Type Question</a>
			</div>
		</div><br><br>
		<?php
		$idP = $_GET['idP'];
		$result = mysql_query("SELECT * FROM personality_ques WHERE perQuesID='$idP'");
		$row = mysql_fetch_array($result);
		?>
		<form action="index.php?page=updatePersonality1" method="post">
		<input type="hidden" name="idP" value="<?php echo $row['perQuesID']; ?>">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Question :</b>
				</div>
				<div class="col-lg-7">
					<textarea name="question" class="form-control" required><?php echo $row['perQues']; ?></textarea>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Category :</b>
				</div>
				<div class="col-lg-4">
					<select class="form-control" name="category" required>
						<option value="">-Please Select Category-</option>
						<?php
						$E_I = "";
						$S_I = "";
						$T_F = "";
						$J_P = "";
						if($row['perQuesCategory']=="Extraversion or Introversion")
							$E_I = "selected='selected'";
						elseif($row['perQuesCategory']=="Sensing or Intuition")
							$S_I = "selected='selected'";
						elseif($row['perQuesCategory']=="Thinking or Feeling")
							$T_F = "selected='selected'";
						elseif($row['perQuesCategory']=="Judging or Perceiving")
							$J_P = "selected='selected'";
						?>
						<option value="Extraversion or Introversion" <?php echo $E_I; ?>>Extraversion or Introversion</option>
						<option value="Sensing or Intuition" <?php echo $S_I; ?>>Sensing or Intuition</option>
						<option value="Thinking or Feeling" <?php echo $T_F; ?>>Thinking or Feeling</option>
						<option value="Judging or Perceiving" <?php echo $J_P; ?>>Judging or Perceiving</option>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<a href="index.php?page=personality" class="btn btn-warning">Back</a>
					<input type="submit" class="btn btn-success" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
			</div>
		</form>
	</div>
</div>