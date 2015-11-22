<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">View Program</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=addClass" class="btn btn-success">Add Program</a>
				<a href="index.php?page=class" class="btn btn-primary">List Program</a>
			</div>
		</div><br><br>
		<?php
		$idC = $_GET['idC'];
		$result = mysql_query("SELECT * FROM class JOIN semester ON class.semesterID=semester.semesterID WHERE classID='$idC'");
		$row = mysql_fetch_array($result);
		?>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Program Name :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['className']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Batch :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['batch']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Semester :</b>
			</div>
			<div class="col-lg-4">
				<?php echo "Semester ".$row['semesterNo']." Session ".$row['semesterSession']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Status :</b>
			</div>
			<div class="col-lg-4">
				<?php echo $row['status']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-4 col-md-offset-3">
				<a href="index.php?page=class" class="btn btn-warning">Back</a>
			</div>
		</div>
	</div>
</div>