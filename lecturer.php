<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Lecturer</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=addLecturer" class="btn btn-success">Add Lecturer</a>
				<br>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover">
						<tr>
							<th>No</th>
							<th>Staff No.</th>
							<th width="400">Lecturer Name</th>
							<th>Action</th>
						</tr>
						<?php
						$i = 1;
						$result = mysql_query("SELECT * FROM lecturer");
						while ($row = mysql_fetch_array($result)) {
							echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$row['lecturerID']."</td>";
							echo "<td>".$row['lecturerName']."</td>";
							echo '<td>
									<a href="index.php?page=viewLecturer&idL='.$row['lecturerID'].'" class="btn btn-primary">View</a>
									<a href="index.php?page=updateLecturer&idL='.$row['lecturerID'].'" class="btn btn-info">Update</a>
									<button class="btn btn-danger" 
									onclick="if(confirm(\'Are you sure to delete this lecturer?\')) 
												window.location.href=\'index.php?page=deleteLecturer&idL='.$row['lecturerID'].'\'">
									Delete</button>
									<button class="btn btn-warning" 
									onclick="if(confirm(\'Are you sure to reset password this lecturer?\')) 
												window.location.href=\'index.php?page=resetPassword&idL='.$row['lecturerID'].'\'">
									Reset Password</button>
									</td>';
							echo "</tr>";
							$i++;
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>