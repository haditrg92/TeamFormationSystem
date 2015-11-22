<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Course</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=course" class="btn btn-primary">List Course</a>
			</div>
		</div><br><br>
		<form action="index.php?page=addCourse1" method="post">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Course Code :</b>
				</div>
				<div class="col-lg-2">
					<input type="text" name="courseID" class="form-control">
				</div>
			</div><br><div class="row">
				<div class="col-lg-3" align="right">
					<b>Course Name :</b>
				</div>
				<div class="col-lg-4">
					<input type="text" name="courseName" class="form-control">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<a href="index.php?page=course" class="btn btn-warning">Back</a>
					<input type="submit" class="btn btn-success" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
			</div>
		</form>
	</div>
</div>