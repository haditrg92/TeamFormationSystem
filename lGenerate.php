<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Generate Group</h1>
			</div>
		</div>
		<br>
		<?php
		$result = mysql_query("SELECT * FROM course_lecturer 
							JOIN course ON course.courseID=course_lecturer.courseID 
							JOIN semester ON course_lecturer.semesterID=semester.semesterID 
							WHERE course_lecturer_ID='".$_GET['CLid']."'" );
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
				<?php echo $row['semesterNo']." Session ".$row['semesterSession']; ?>
			</div>
		</div><br><br>


		<form action="index.php?page=lGenerateAHP" method="post" id="nate">
		<!-- <form action="lGenerateAHP_2.php" method="post" id="nate"> -->
			<input type="hidden" name="CLid" value="<?php echo $_GET['CLid']; ?>">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Criteria :</b>
				</div>
				<div class="col-lg-3">
					<input type="checkbox" name="CGPA" value="1"> CGPA <br>
					<input type="checkbox" name="gender" value="1"> Gender <br>
					<input type="checkbox" name="eduBack" value="1"> Education Background <br>
					<input type="checkbox" name="learning" value="1"> Learning Style <br>
					<input type="checkbox" name="personality" value="1"> Personality Type <br>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Per Group :</b>
				</div>
				<div class="col-lg-2">
					<input type="number" min="2" name="group" required>
				</div>
			</div><br>
			<div class="col-md-4 col-md-offset-3">
				<a href="index.php?page=lGroupFormation" class="btn btn-warning">Back</a>
				<input type="submit" class="btn btn-success" id="checkBtn" value="Submit">
				<input type="reset" class="btn btn-danger" value="Reset">
			</div>

		</form>
	</div>
</div>

<script type="text/javascript">
	$('#nate').submit(function() {
		if ($('input:checkbox', this).is(':checked')) {
			// everything's fine...
		} else {
			alert('Please tick at least 1 criteria!');
			return false;
		}
		
	});
</script>