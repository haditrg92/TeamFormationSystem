<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">View Lecturer</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=addLecturer" class="btn btn-success">Add Lecturer</a>
				<a href="index.php?page=lecturer" class="btn btn-primary">List Lecturer</a>
			</div>
		</div><br><br>
		<?php
		$result = mysql_query("SELECT * FROM lecturer WHERE lecturerID='".$_GET['idL']."'");
		$row = mysql_fetch_array($result);
		?>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Staff No. :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['lecturerID']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Lecturer Name :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['lecturerName']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Phone No. :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['lecturerPhone']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Office No. :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['officePhone']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-4 col-md-offset-3">
				<a href="index.php?page=lecturer" class="btn btn-warning">Back</a>
			</div>
		</div>
	</div>
</div>