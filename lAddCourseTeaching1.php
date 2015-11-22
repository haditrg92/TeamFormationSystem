<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Course Teaching</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=lCourseTeaching" class="btn btn-primary">List Course Teaching</a>
				<br>
			</div>
		</div>
		<br>
		<?php
		$result = mysql_query("SELECT * FROM course WHERE courseID='".$_GET['id']."'");
		$row = mysql_fetch_array($result);
		?>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Course Code :</b>
			</div>
			<div class="col-lg-4">
				<?php echo $row['courseID']; ?>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Course Name :</b>
			</div>
			<div class="col-lg-4">
				<?php echo $row['courseName']; ?>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4 col-md-offset-3">
				<a href="index.php?page=class" class="btn btn-warning">Back</a>
				<a href="index.php?page=lAddCourseTeaching2&id=<?php echo $row['courseID']; ?>" class="btn btn-success">Add</a>
			</div>
		</div>
	</div>
</div>