<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">View Group Formation</h1>
			</div>
		</div>
		<?php
		$result = mysql_query("SELECT * FROM course_student 
					JOIN course_lecturer ON course_lecturer.course_lecturer_ID=course_student.course_lecturer_ID 
					JOIN course ON course_lecturer.courseID=course.courseID 
					JOIN lecturer ON lecturer.lecturerID=course_lecturer.lecturerID 
					JOIN semester ON course_lecturer.semesterID=semester.semesterID 
					WHERE course_student.studentID='".$_SESSION['userID']."' AND course_lecturer.course_lecturer_ID='".$_GET['id']."'");
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
				<b>Semester :</b>
			</div>
			<div class="col-lg-4">
				Semester <?php echo $row['semesterNo']; ?> Session <?php echo $row['semesterSession']; ?>
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
				<b>Lecturer Phone:</b>
			</div>
			<div class="col-lg-4">
				<?php echo $row['lecturerPhone']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Office Phone:</b>
			</div>
			<div class="col-lg-4">
				<?php echo $row['officePhone']; ?>
			</div>
		</div><br>
		<?php
		$result1 = mysql_query("SELECT * FROM course_student 
					JOIN student ON student.studentID=course_student.studentID 
					WHERE course_student.groups='".$row['groups']."' 
					ORDER BY student.studentName ASC");
		?>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Group <?php echo $row['groups']+1; ?>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<tr>
									<th>No</th>
									<th width="100">Matric No</th>
									<th>Name</th>
								</tr>
								<?php
								$n = 1;
								while($row1 = mysql_fetch_array($result1)):
								?>
								<tr>
									<td><?php echo $n++; ?></td>
									<td><?php echo $row1['studentID']; ?></td>
									<td><?php echo $row1['studentName']; ?></td>
								</tr>
								<?php endwhile; ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12" align="center">
				<a href="index.php?page=sGroupFormation" class="btn btn-warning">Back</a>
				<a href="printByGroup.php?id=<?php echo $_GET['id']; ?>" class="btn btn-primary" target="_blank">Print</a><br><br>
			</div>
		</div><br>
	</div>
</div>