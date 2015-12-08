<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">View Student</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=student" class="btn btn-primary">List Class of Student</a>
			</div>
		</div><br><br>
		<?php
		$result = mysql_query("SELECT * FROM student JOIN class ON student.classID=class.classID WHERE studentID='".$_GET['idS']."'");
		$row = mysql_fetch_array($result);
		?>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Matric No. :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['studentID']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Student Name :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['studentName']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Phone :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['studentPhone']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>CGPA :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['CGPA']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Gender :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['gender']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Background Education :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['backgroundEdu']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Intake :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['intake']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Program :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['className']." Batch ".$row['batch']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-4 col-md-offset-3">
				<a href="index.php?page=student1&idC=<?php echo $row['classID']; ?>" class="btn btn-warning">Back</a>
			</div>
		</div>
	</div>
</div>