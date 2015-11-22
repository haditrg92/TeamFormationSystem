<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Update Profile</h1>
			</div>
		</div><br>
		<?php
		$result = mysql_query("SELECT * FROM lecturer WHERE lecturerID='".$_SESSION['userID']."'");
		$row = mysql_fetch_array($result);
		?>
		<form action="index.php?page=lProfileUpdate1" method="post">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Name :</b>
				</div>
				<div class="col-lg-5">
					<input type="text" name="name" class="form-control" value="<?php echo $row['lecturerName']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Phone :</b>
				</div>
				<div class="col-lg-3">
					<input type="text" name="phone" class="form-control" value="<?php echo $row['lecturerPhone']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Office Phone :</b>
				</div>
				<div class="col-lg-3">
					<input type="text" name="office" class="form-control" value="<?php echo $row['officePhone']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<a href="index.php?page=lProfile" class="btn btn-warning">Back</a>
					<input type="submit" class="btn btn-success" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
			</div>
		</form>
	</div>
</div>