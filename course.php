<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Course</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=addCourse" class="btn btn-success">Add Course</a>
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
							<th>Course Code</th>
							<th width="600">Course Name</th>
							<th>Action</th>
						</tr>
						<?php
						$i = 1;
						$result = mysql_query("SELECT * FROM course");
						while ($row = mysql_fetch_array($result)) {
							echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$row['courseID']."</td>";
							echo "<td>".$row['courseName']."</td>";
							echo '<td>
									<a href="index.php?page=viewCourse&idC='.$row['courseID'].'" class="btn btn-primary">View</a>
									<a href="index.php?page=updateCourse&idC='.$row['courseID'].'" class="btn btn-info">Update</a>
									<button class="btn btn-danger" 
									onclick="if(confirm(\'Are you sure to delete this course?\')) 
												window.location.href=\'index.php?page=deleteCourse&idC='.$row['courseID'].'\'">
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