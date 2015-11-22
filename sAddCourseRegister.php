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
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<tr>
							<th>No</th>
							<th>Course Code</th>
							<th width="400">Course</th>
							<th>Lecturer Name</th>
							<th>Action</th>
						</tr>
						<?php
						$res = mysql_query("SELECT * FROM current_semester");
						$ro = mysql_fetch_array($res);
						$current_semester = $ro['semesterID'];

						$result = mysql_query("SELECT * FROM course_lecturer 
							JOIN course ON course_lecturer.courseID=course.courseID 
							JOIN lecturer ON lecturer.lecturerID=course_lecturer.lecturerID 
							WHERE course_lecturer.semesterID='$current_semester'");
						$i = 1;
						while($row = mysql_fetch_array($result)){
							echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$row['courseID']."</td>";
							echo "<td>".$row['courseName']."</td>";
							echo "<td>".$row['lecturerName']."</td>";
							echo "<td><a href='index.php?page=sAddCourseRegister1&id=".$row['course_lecturer_ID']."' class='btn btn-success'>View</a></td>";
							echo "</tr>";
							$i++;
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>