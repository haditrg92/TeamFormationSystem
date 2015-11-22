<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Course Register</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=sCourseRegister" class="btn btn-primary">List Course Registered</a>
			</div>
		</div><br>
		<?php
		$result = mysql_query("SELECT * FROM course_lecturer 
							JOIN course ON course_lecturer.courseID=course.courseID 
							JOIN lecturer ON lecturer.lecturerID=course_lecturer.lecturerID 
							WHERE course_lecturer.course_lecturer_ID='".$_GET['id']."'");
		$row = mysql_fetch_array($result);
		?>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Course Code :</b>
			</div>
			<div class="col-lg-4">
				<?php echo $row['courseID']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Course Name :</b>
			</div>
			<div class="col-lg-4">
				<?php echo $row['courseName']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Lecturer Name :</b>
			</div>
			<div class="col-lg-4">
				<?php echo $row['lecturerName']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Office Phone :</b>
			</div>
			<div class="col-lg-4">
				<?php echo $row['officePhone']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-4 col-md-offset-3">
				<a href="index.php?page=class" class="btn btn-warning">Back</a>
				<a href="index.php?page=sAddCourseRegister2&id=<?php echo $row['course_lecturer_ID']; ?>" class="btn btn-success">Add</a>
			</div>
		</div>
	</div>
</div>