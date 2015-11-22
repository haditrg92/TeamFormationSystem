<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Update Current Semester</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=addSemester" class="btn btn-success">Add Semester</a>
				<a href="index.php?page=semester" class="btn btn-primary">List Semester</a>
			</div>
		</div><br><br>
		<form action="index.php?page=currentSemester2" method="post">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Semester :</b>
				</div>
				<div class="col-lg-3">
					<select class="form-control" name="semester">
						<option value="">-Please Select Semester-</option>
						<?php
						$se = "";
						
						$res = mysql_query("SELECT * FROM current_semester JOIN semester ON current_semester.semesterID=semester.semesterID");
						$ro = mysql_fetch_array($res);

						$result = mysql_query("SELECT * FROM semester ORDER BY semesterNo DESC, semesterSession DESC");
						while ($row = mysql_fetch_array($result)) {
							if($row['semesterID']==$ro['semesterID'])
								$se = "selected='selected'";
							else
								$se = "";

							echo '<option value="'.$row['semesterID'].'" '.$se.'>';
							echo 'Semester '.$row['semesterNo'].' Session '.$row['semesterSession'].'</option>';
						}
						?>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<a href="index.php?page=currentSemester" class="btn btn-warning">Back</a>
					<input type="submit" class="btn btn-info" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
			</div>
		</form>
	</div>
</div>