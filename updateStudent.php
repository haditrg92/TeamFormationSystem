<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Update Student</h1>
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
		<form action="index.php?page=updateStudent1" method="post">
		<input type="hidden" name="idC" value="<?php echo $row['classID']; ?>">
		<input type="hidden" name="studentID" value="<?php echo $row['studentID']; ?>">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Matric No. :</b>
				</div>
				<div class="col-lg-2">
					<input type="text" name="matricNo" id="disabledInput" class="form-control" value="<?php echo $row['studentID']; ?>" disabled>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Student Name :</b>
				</div>
				<div class="col-lg-5">
					<input type="text" name="studentName" class="form-control" value="<?php echo $row['studentName']; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Gender :</b>
				</div>
				<div class="col-lg-3">
					<select class="form-control" name="gender">
						<option value="">-Please Select Gender-</option>
						<option <?php if($row['gender']=="Male") echo "selected"; ?> >Male</option>
						<option <?php if($row['gender']=="Female") echo "selected"; ?> >Female</option>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Class :</b>
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
					<a href="index.php?page=student1&idC=<?php echo $row['classID']; ?>" class="btn btn-warning">Back</a>
					<input type="submit" class="btn btn-success" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
			</div>
		</form>
	</div>
</div>