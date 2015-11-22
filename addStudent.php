<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Student</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=student" class="btn btn-primary">List Class of Student</a>
			</div>
		</div><br><br>
		<form action="index.php?page=addStudent1" method="post">
		<input type="hidden" name="classID" value="<?php echo $_GET['idC']; ?>">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Matric No. :</b>
				</div>
				<div class="col-lg-2">
					<input type="text" name="matricNo" class="form-control" required maxlength="6" minlength="6">
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Student Name :</b>
				</div>
				<div class="col-lg-5">
					<input type="text" name="studentName" class="form-control" required>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Gender :</b>
				</div>
				<div class="col-lg-3">
					<select class="form-control" name="gender" required>
						<option value="">-Please Select Gender-</option>
						<option>Male</option>
						<option>Female</option>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<a href="index.php?page=student1&idC=<?php echo $_GET['idC']; ?>" class="btn btn-warning">Back</a>
					<input type="submit" class="btn btn-success" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
			</div>
		</form>
	</div>
</div>