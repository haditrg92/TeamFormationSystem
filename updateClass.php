<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Update Program</h1>
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
		<form action="index.php?page=updateClass1" method="post">
		<input type="hidden" name="classID" value="<?php echo $row['classID']; ?>">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Program Name :</b>
				</div>
				<div class="col-lg-3">
					<input type="text" name="className" class="form-control" value="<?php echo $row['className']; ?>" required>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Batch :</b>
				</div>
				<div class="col-lg-3">
					<input type="text" name="batch" class="form-control" value="<?php echo $row['batch']; ?>" required>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Semester :</b>
				</div>
				<div class="col-lg-4">
					<select class="form-control" name="semester" required>
						<option value="">-Please Select Semester-</option>
						<?php
						$se = "";

						$res = mysql_query("SELECT * FROM semester ORDER BY semesterNo DESC, semesterSession DESC");
						while ($ro = mysql_fetch_array($res)) {
							if($row['semesterID']==$ro['semesterID'])
								$se = "selected='selected'";
							else
								$se = "";

							echo '<option value="'.$ro['semesterID'].'" '.$se.'>';
							echo 'Semester '.$ro['semesterNo'].' Session '.$ro['semesterSession'].'</option>';
						}
						?>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Status :</b>
				</div>
				<div class="col-lg-3">
					<select class="form-control" name="status" required>
						<option value="">-Please Select Status-</option>
						<option <?php if($row['status']=='Active') echo "selected"; ?> value="Active">Active</option>
						<option <?php if($row['status']=='Deactive') echo "selected"; ?> value="Deactive">Deactive</option>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<a href="index.php?page=class" class="btn btn-warning">Back</a>
					<input type="submit" class="btn btn-success" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
			</div>
		</form>
	</div>
</div>