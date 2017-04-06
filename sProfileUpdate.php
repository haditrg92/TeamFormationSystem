<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Update Profile</h1>
			</div>
		</div><br>
		<?php
		$result = mysql_query("SELECT * FROM student 
			JOIN class ON student.classID=class.classID 
			WHERE student.studentID='".$_SESSION['userID']."'");
		$row = mysql_fetch_array($result);
		?>
		<form action="index.php?page=sProfileUpdate1" method="post">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Name :</b>
				</div>
				<div class="col-lg-5">
					<input type="text" name="name" class="form-control" required value="<?php echo $row['studentName']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Phone :</b>
				</div>
				<div class="col-lg-3">
					<input type="text" name="phone" class="form-control" required value="<?php echo $row['studentPhone']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>CGPA :</b>
				</div>
				<div class="col-lg-2">
					<input type="number" min='0' max='4.00' step="0.01" required name="cgpa" class="form-control" value="<?php echo $row['CGPA']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Gender :</b>
				</div>
				<div class="col-lg-3">
					<select class="form-control" name="gender" required>
						<option value="">-Please Select Gender-</option>
						<option value="Male" <?php if($row['gender']=="Male") echo "selected"; ?>>Male</option>
						<option value="Female" <?php if($row['gender']=="Female") echo "selected"; ?>>Female</option>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Intake :</b>
				</div>
				<div class="col-lg-3">
					<input type="text" name="intake" class="form-control" required value="<?php echo $row['intake']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Education Background :</b>
				</div>
				<div class="col-lg-3">
					<select class="form-control" name="background" required>
						<option value="">-Please Select Education-</option>
						<option value="Diploma" <?php if($row['backgroundEdu']=="Diploma") echo "selected"; ?>>Diploma</option>
						<option value="STPM" <?php if($row['backgroundEdu']=="STPM") echo "selected"; ?>>STPM</option>
						<option value="Matric" <?php if($row['backgroundEdu']=="Matric") echo "selected"; ?>>Matric</option>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Program :</b>
				</div>
				<div class="col-lg-4">
					<select class="form-control" name="class" required>
						<option value="">-Please Select Class-</option>
						<?php
						$result1 = mysql_query("SELECT * FROM class WHERE status='Active'");
						$selected = "";

						while($row1 = mysql_fetch_array($result1)){
							if($row1['classID']==$row['classID']){
								$selected = "selected='selected'";
							}
							else{
								$selected = "";
							}
							echo "<option value='".$row1['classID']."' $selected>".$row1['className']." Batch ".$row1['batch']."</option>";
						}
						?>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<a href="index.php?page=sProfile" class="btn btn-warning">Back</a>
					<input type="submit" class="btn btn-success" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
			</div>
		</form>
	</div>
</div>