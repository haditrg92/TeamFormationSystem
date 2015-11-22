<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Profile</h1>
			</div>
		</div><br>
		<?php
		$result = mysql_query("SELECT * FROM lecturer 
								JOIN profilepic ON profilepic.userID=lecturer.lecturerID 
								WHERE lecturer.lecturerID='".$_SESSION['userID']."'");
		$row = mysql_fetch_array($result);
		?>
		<div class="row">
			<div class="col-md-4 col-md-offset-4" align="center">
				<a href="index.php?page=lProfilePic"><img src="<?php echo $row['location']; ?>" height="150" width="150"></a><br>
				<font color="red">* click picture to change profile picture</font>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Name :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['lecturerName']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Phone :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['lecturerPhone']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-lg-3" align="right">
				<b>Office Phone :</b>
			</div>
			<div class="col-lg-3">
				<?php echo $row['officePhone']; ?>
			</div>
		</div><br>
		<div class="row">
			<div class="col-md-4 col-md-offset-3">
				<a href="index.php?page=lProfileUpdate" class="btn btn-primary">Update</a>
				<a href="index.php?page=lChangePassword" class="btn btn-info">Change Password</a>
			</div>
		</div>
	</div>
</div>