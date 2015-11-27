<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Student By Excel</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=student" class="btn btn-primary">List Class of Student</a>
			</div>
		</div><br><br>
		<form action="index.php?page=addStudentExcel1" method="post" enctype="multipart/form-data">
		<input type="hidden" name="classID" value="<?php echo $_GET['idC']; ?>">
			<div class="row">
				<div class="col-lg-8" align="center">
					<h3>Example Data</h3>
					<img src="Classes/example.jpg" width="70%"  height="70%">
				</div>
			</div><br><div class="row">
				<div class="col-lg-3" align="right">
					<b>Select file :</b>
				</div>
				<div class="col-lg-2">
					<input type="file" name="file" id="file" required />
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