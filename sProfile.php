<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Profile</h1>
			</div>
		</div><br>
		<?php
		$result = mysql_query("SELECT * FROM student 
			JOIN class ON student.classID=class.classID 
			JOIN profilepic ON profilepic.userID=student.studentID
			WHERE student.studentID='".$_SESSION['userID']."'");
		$row = mysql_fetch_array($result);
		?>
		<div class="row">
			<div class="col-md-4 col-md-offset-4" align="center">
				<a href="index.php?page=sProfilePic"><img src="<?php echo $row['location']; ?>" height="150" width="150"></a><br>
				<font color="red">* click picture to change profile picture</font>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Name :</b>
			</div>
			<div class="col-lg-5">
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
				<b>Class :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['className']." Batch ".$row['batch']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-4 col-md-offset-3">
				<a href="index.php?page=sProfileUpdate" class="btn btn-primary">Update</a>
				<a href="index.php?page=sChangePassword" class="btn btn-info">Change Password</a><br><br>
			</div>
		</div>
	</div>
</div>