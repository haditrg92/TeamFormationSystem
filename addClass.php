<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Program</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=class" class="btn btn-primary">List Program</a>
			</div>
		</div><br><br>
		<form action="index.php?page=addClass1" method="post">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Program Name :</b>
				</div>
				<div class="col-lg-3">
					<input type="text" name="className" class="form-control" required>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Batch :</b>
				</div>
				<div class="col-lg-3">
					<input type="text" name="batch" class="form-control" required>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Semester :</b>
				</div>
				<div class="col-lg-4">
					<select class="form-control" name="semester" required>
						<option value="">-Please Select Semester-</option>
						<?php
						$result = mysql_query("SELECT * FROM semester ORDER BY semesterNo DESC, semesterSession DESC");
						while ($row = mysql_fetch_array($result)) {
							echo '<option value="'.$row['semesterID'].'">';
							echo 'Semester '.$row['semesterNo'].' Session '.$row['semesterSession'].'</option>';
						}
						?>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<a href="index.php?page=class" class="btn btn-warning">Back</a>
					<input type="submit" class="btn btn-success" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
			</div>
		</form>
	</div>
</div>