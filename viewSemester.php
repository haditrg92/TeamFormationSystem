<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">View Semester</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=addSemester" class="btn btn-success">Add Semester</a>
				<a href="index.php?page=semester" class="btn btn-primary">List Semester</a>
			</div>
		</div><br><br>
		<?php
		$idS = $_GET['idS'];
		$result = mysql_query("SELECT * FROM semester WHERE semesterID='$idS'");
		$row = mysql_fetch_array($result);
		?>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Semester :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['semesterNo']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Session :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['semesterSession']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-4 col-md-offset-3">
				<a href="index.php?page=semester" class="btn btn-warning">Back</a>
			</div>
		</div>
	</div>
</div>