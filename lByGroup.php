<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">View List By Group Formation</h1>
			</div>
		</div>

		<?php
		$CLid = $_GET['CLid'];
		$result = mysql_query("SELECT * FROM course_lecturer 
								JOIN course ON course.courseID=course_lecturer.courseID 
								JOIN semester ON semester.semesterID=course_lecturer.semesterID 
								WHERE course_lecturer_ID='$CLid'");
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
		<form action="index.php?page=lByGroup" method="get">
			<input type="hidden" name="page" value="lByGroup">
			<input type="hidden" name="CLid" value="<?php echo $_GET['CLid']; ?>">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Group :</b>
				</div>
				<div class="col-lg-3">
					<input type="number" name="group" min="1">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<input type="submit" class="btn btn-success" value="Submit">
				</div>
			</div><br>
		</form>
		<?php
		if(isset($_GET['group'])){
			$group = $_GET['group'] - 1;

			$result1 = mysql_query("SELECT * FROM course_student 
								JOIN student ON student.studentID=course_student.studentID 
								WHERE course_student.course_lecturer_ID='$CLid' AND course_student.groups='$group'");
			$check = mysql_num_rows($result1);
			?>
			<div class="row">
				<div class="col-lg-12">
					<?php if($check>0){ ?>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<b>Group <?php echo $_GET['group']; ?></b>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover">
									<tr>
										<th width="50">No</th>
										<th width="100">Matric No.</th>
										<th>Name</th>
									</tr>
									<?php 
									$n=1;
									$result1 = mysql_query("SELECT * FROM course_student 
										JOIN student ON student.studentID=course_student.studentID 
										WHERE course_student.course_lecturer_ID='$CLid' AND course_student.groups='$group'");
									while($row1 = mysql_fetch_array($result1)){
									?>
									<tr>
										<td><?php echo $n++; ?></td>
										<td><?php echo $row1['studentID']; ?></td>
										<td><?php echo $row1['studentName']; ?></td>
									</tr>
									<?php } ?>
								</table>
							</div>
						</div>
					</div>
					<?php
					}
					else{
						echo "<div class='alert alert-danger'>";
						echo "No Group";
						echo "</div>";
					}
					?>
				</div>
			</div>
		<?php
		}
		?>

		<div class="row">
			<div class="col-lg-12" align="center">
				<a href="index.php?page=lViewCourseTeaching&id=<?php echo $_GET['CLid']; ?>" class="btn btn-warning">Back</a>
			</div>
		</div><br>
	</div>
</div>