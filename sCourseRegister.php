<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Course Register</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=sAddCourseRegister" class="btn btn-success">Add Course</a>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<tr>
							<th>No</th>
							<th>Course Code</th>
							<th width="400">Course Name</th>
							<th>Semester</th>
							<th>Action</th>
						</tr>
						<?php
						$result = mysql_query("SELECT * FROM course_student 
							JOIN course_lecturer ON course_lecturer.course_lecturer_ID=course_student.course_lecturer_ID 
							JOIN course ON course_lecturer.courseID=course.courseID  
							JOIN semester ON course_lecturer.semesterID=semester.semesterID 
							WHERE course_student.studentID='".$_SESSION['userID']."' 
							ORDER BY semester.semesterNo DESC, semester.semesterSession DESC");
						$i = 1;
						while($row = mysql_fetch_array($result)){
							echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$row['courseID']."</td>";
							echo "<td>".$row['courseName']."</td>";
							echo "<td>Semester ".$row['semesterNo']." Session ".$row['semesterSession']."</td>";
							echo '<td>
									<a href="index.php?page=sViewCourseRegister&id='.$row['course_lecturer_ID'].'" class="btn btn-primary">View</a>
									<button class="btn btn-danger" 
									onclick="if(confirm(\'Are you sure to delete this course registered?\')) 
												window.location.href=\'index.php?page=sDeleteCourseRegister&id='.$row['course_lecturer_ID'].'\'">
									Delete</button>
									</td>';
							echo "</tr>";
							$i++;
						}
						$check = mysql_num_rows($result);
						if($check==0){
							echo "<tr>";
							echo "<td colspan='4' align='center'><div class='alert alert-danger'>No Course Registered</div></td>";
							echo "</tr>";
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>