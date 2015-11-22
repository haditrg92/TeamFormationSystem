<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Lecturer</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=lecturer" class="btn btn-primary">List Lecturer</a>
			</div>
		</div><br><br>
		<form action="index.php?page=addLecturer1" method="post">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Staff No. :</b>
				</div>
				<div class="col-lg-2">
					<input type="text" name="staffNo" class="form-control" required>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Lecturer Name :</b>
				</div>
				<div class="col-lg-5">
					<input type="text" name="lecturerName" class="form-control" required>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<a href="index.php?page=lecturer" class="btn btn-warning">Back</a>
					<input type="submit" class="btn btn-success" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
			</div>
		</form>
	</div>
</div>