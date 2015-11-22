<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">List of Student</h1>
			</div>
		</div>
		<?php
		$result = mysql_query("SELECT * FROM course_lecturer 
			JOIN course ON course.courseID=course_lecturer.courseID 
			JOIN semester ON course_lecturer.semesterID=semester.semesterID 
			WHERE course_lecturer.course_lecturer_ID='".$_GET['id']."'");
		$row = mysql_fetch_array($result);
		?>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Course Code:</b>
			</div>
			<div class="col-lg-4">
				<?php echo $row['courseID']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Course Name:</b>
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
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<tr>
							<th>No</th>
							<th width="100">Matric No</th>
							<th>Name</th>
							<th>Action</th>
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
							echo '<td>
										<a href="index.php?page=lAnalysisPersonality&sID='.$row1['studentID'].'&id='.$_GET['id'].'" class="btn btn-primary">Personality</a>
										<a href="index.php?page=lAnalysisLearning&sID='.$row1['studentID'].'&id='.$_GET['id'].'" class="btn btn-info">Learning Style</a>
									</td>';
							echo "</tr>";
							$i++;
						}
						$check = mysql_num_rows($result1);
						if($check==0){
							echo "<tr>";
							echo "<td colspan='4' align='center'><div class='alert alert-danger'>No Student</div></td>";
							echo "</tr>";
						}
						?>
					</table>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12" align="center">
				<a href="index.php?page=lAnalysis" class="btn btn-warning">Back</a><br><br>
			</div>
		</div>
	</div>
</div>