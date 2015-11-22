<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Update Course</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=addCourse" class="btn btn-success">Add Course</a>
				<a href="index.php?page=course" class="btn btn-primary">List Course</a>
			</div>
		</div><br><br>
		<?php
		$result = mysql_query("SELECT * FROM course WHERE courseID='".$_GET['idC']."'");
		$row = mysql_fetch_array($result);
		?>
		<form action="index.php?page=updateCourse1" method="post">
		<input type="hidden" name="courseID" value="<?php echo $row['courseID']; ?>">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Course Code :</b>
				</div>
				<div class="col-lg-3">
					<input type="text" id="disabledInput" disabled name="courseCode" class="form-control" value="<?php echo $row['courseID']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Course Name :</b>
				</div>
				<div class="col-lg-3">
					<input type="text" name="courseName" class="form-control" value="<?php echo $row['courseName']; ?>">
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