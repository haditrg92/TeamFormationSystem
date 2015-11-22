<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Update Semester</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=addSemester" class="btn btn-success">Add Semester</a>
				<a href="index.php?page=semester" class="btn btn-primary">List Semester</a>
			</div>
		</div><br><br>
		<?php
		$idS = $_GET['idS'];
		$result = mysql_query("SELECT * FROM semester WHERE semesterID='$idS'");
		$row = mysql_fetch_array($result);
		$no = $row['semesterNo'];
		?>
		<form action="index.php?page=updateSemester1" method="post">
		<input type="hidden" name="semesterID" value="<?php echo $row['semesterID']; ?>">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Semester :</b>
				</div>
				<div class="col-lg-3">
					<select class="form-control" name="semester" required>
						<option value="">-Please Select Semester-</option>
						<option <?php if($no=='1') echo 'selected="selected"'; ?> value="1">1</option>
						<option <?php if($no=='2') echo 'selected="selected"'; ?> value="2">2</option>
						<option <?php if($no=='Short') echo 'selected="selected"'; ?> value="Short">Short</option>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Session :</b>
				</div>
				<div class="col-lg-3">
					<input type="text" name="session" class="form-control" value="<?php echo $row['semesterSession']; ?>" required>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<a href="index.php?page=semester" class="btn btn-warning">Back</a>
					<input type="submit" class="btn btn-success" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
			</div>
		</form>
	</div>
</div>