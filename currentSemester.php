<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Current Semester</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=addSemester" class="btn btn-success">Add Semester</a>
				<a href="index.php?page=semester" class="btn btn-primary">List Semester</a>
			</div>
		</div><br><br>
		<?php
		$result = mysql_query("SELECT * FROM current_semester JOIN semester ON current_semester.semesterID=semester.semesterID");
		$row = mysql_fetch_array($result);
		?>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Current Semester :</b>
			</div>
			<div class="col-lg-3">
				Semester <?php echo $row['semesterNo']; ?> Session <?php echo $row['semesterSession']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-4 col-md-offset-3">
				<a href="index.php?page=currentSemester1" class="btn btn-info">Update Current Semester</a>
			</div>
		</div>
	</div>
</div>