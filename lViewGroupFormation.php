<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">View List All Group Formation</h1>
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
		<?php
		$grouping = array();

		$result1 = mysql_query("SELECT * FROM course_student 
								JOIN student ON student.studentID=course_student.studentID 
								WHERE course_student.course_lecturer_ID='$CLid' 
								ORDER BY course_student.groups ASC, student.studentName ASC");
		
		while($row1 = mysql_fetch_array($result1)):
			$grouping[$row1['groups']][$row1['studentID']] = $row1['studentName'];
		endwhile; 

		$i = 1;
		
		foreach($grouping as $group => $students):
		?>
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<b>Group <?php echo $i++; ?></b>
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
								foreach($students as $noMatric => $name): 
								?>
								<tr>
									<td><?php echo $n++; ?></td>
									<td><?php echo $noMatric; ?></td>
									<td><?php echo $name; ?></td>
								</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>

		<div class="row">
			<div class="col-lg-12" align="center">
				<a href="index.php?page=lGroupFormation" class="btn btn-warning">Back</a>
				<a href="printAllGroup.php?CLid=<?php echo $CLid; ?>" class="btn btn-primary" target="_blank">Print</a>
			</div>
		</div><br>
	</div>
</div>