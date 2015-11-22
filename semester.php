<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Semester</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=addSemester" class="btn btn-success">Add Semester</a>
				<a href="index.php?page=currentSemester" class="btn btn-primary">Current Semester</a>
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
							<th width="600">Semester</th>
							<th>Action</th>
						</tr>
						<?php
						$i = 1;
						$result = mysql_query("SELECT * FROM semester ORDER BY semesterNo DESC, semesterSession DESC");
						while ($row = mysql_fetch_array($result)) {
							echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>Semester ".$row['semesterNo']." Session ".$row['semesterSession']."</td>";
							echo '<td>
									<a href="index.php?page=viewSemester&idS='.$row['semesterID'].'" class="btn btn-primary">View</a>
									<a href="index.php?page=updateSemester&idS='.$row['semesterID'].'" class="btn btn-info">Update</a>
									<button class="btn btn-danger" 
									onclick="if(confirm(\'Are you sure to delete this semester?\')) 
												window.location.href=\'index.php?page=deleteSemester&idS='.$row['semesterID'].'\'">
									Delete</button>
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