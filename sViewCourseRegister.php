<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">View Course Registered</h1>
			</div>
		</div><br>
		<?php 
		$result = mysql_query("SELECT * FROM course_lecturer 
							JOIN course ON course_lecturer.courseID=course.courseID 
							JOIN lecturer ON lecturer.lecturerID=course_lecturer.lecturerID 
							JOIN semester ON course_lecturer.semesterID=semester.semesterID 
							WHERE course_lecturer.course_lecturer_ID='".$_GET['id']."'");
		$row = mysql_fetch_array($result);
		?>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Course Code :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['courseID']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Course Name :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['courseName']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Semester :</b>
			</div>
			<div class="col-lg-3">
				Semester <?php echo $row['semesterNo']; ?> Session <?php echo $row['semesterSession']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Lecturer Name :</b>
			</div>
			<div class="col-lg-6">
				<?php echo $row['lecturerName']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Lecturer Phone :</b>
			</div>
			<div class="col-lg-6">
				<?php echo $row['lecturerPhone']; ?>
			</div>
		</div><br>

		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Office Phone :</b>
			</div>
			<div class="col-lg-6">
				<?php echo $row['officePhone']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-4 col-md-offset-3">
				<a href="index.php?page=sCourseRegister" class="btn btn-warning">Back</a>
			</div>
		</div>
	</div>
</div>