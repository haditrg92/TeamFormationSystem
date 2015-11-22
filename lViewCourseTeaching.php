<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">View Course Teaching</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=lAddCourseTeaching" class="btn btn-primary">List Course Teaching</a>
				<br>
			</div>
		</div><br>
		<?php
		$result = mysql_query("SELECT * FROM course_lecturer 
			JOIN course ON course.courseID=course_lecturer.courseID 
			JOIN semester ON course_lecturer.semesterID=semester.semesterID 
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
				<b>Semester :</b>
			</div>
			<div class="col-lg-4">
				Semester <?php echo $row['semesterNo']; ?> Session <?php echo $row['semesterSession']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						List of Student
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover">
								<tr>
									<th>No</th>
									<th>Matric No</th>
									<th>Name</th>
								</tr>
								<?php
								$i = 1;
								$result1 = mysql_query("SELECT * FROM course_student 
											JOIN course_lecturer ON course_lecturer.course_lecturer_ID=course_student.course_lecturer_ID 
											JOIN student ON course_student.studentID=student.studentID 
											WHERE course_student.course_lecturer_ID='".$row['course_lecturer_ID']."' 
											ORDER BY student.studentName ASC");
								while($row1 = mysql_fetch_array($result1)){
									echo "<tr>";
									echo "<td>$i</td>";
									echo "<td>".$row1['studentID']."</td>";
									echo "<td>".$row1['studentName']."</td>";
									echo "</tr>";
									$i++;
								}
								$check = mysql_num_rows($result1);
								if($check==0){
									echo "<tr>";
									echo "<td colspan='2' align='center'><div class='alert alert-danger'>No Student</div></td>";
									echo "</tr>";
								}
								?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10" align="center">
				<a href="index.php?page=lCourseTeaching" class="btn btn-warning">Back</a>
				<?php
				if($row['generate']==1){
				?>
				<a href="index.php?page=lViewGroupFormation&CLid=<?php echo $_GET['id']; ?>" class="btn btn-primary">List all group</a>
				<a href="index.php?page=lByGroup&CLid=<?php echo $_GET['id']; ?>" class="btn btn-info">List by group</a>
				<a href="index.php?page=lGenerate&CLid=<?php echo $_GET['id']; ?>" class="btn btn-danger">Re-Generate Group</a>
				<?php
				}
				?><br><br>
			</div>
		</div>
	</div>
</div>