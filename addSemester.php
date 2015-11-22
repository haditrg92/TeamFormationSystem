<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Semester</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=semester" class="btn btn-primary">List Semester</a>
			</div>
		</div><br><br>
		<form action="index.php?page=addSemester1" method="post">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Semester :</b>
				</div>
				<div class="col-lg-3">
					<select class="form-control" name="semester" required>
						<option value="">-Please Select Semester-</option>
						<option>1</option>
						<option>2</option>
						<option>Short</option>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Session :</b>
				</div>
				<div class="col-lg-3">
					<input type="text" name="session" class="form-control" required>
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