<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
			<?php
			$result = mysql_query("SELECT * FROM class WHERE classID='".$_GET['idC']."'");
			$row = mysql_fetch_array($result);
			?>
				<h1 class="page-header">List Student Program <?php echo $row['className']; ?> Batch <?php echo $row['batch']; ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=student" class="btn btn-primary">List Program of Student</a>
				<a href="index.php?page=addStudent&idC=<?php echo $row['classID']; ?>" class="btn btn-success">Add Student</a>
				<a href="index.php?page=addStudentExcel&idC=<?php echo $row['classID']; ?>" class="btn btn-success">Add Student By Excel</a>
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
							<th>Matric No.</th>
							<th width="400">Student Name</th>
							<th>Action</th>
						</tr>
						<?php
						$i = 1;
						$result = mysql_query("SELECT * FROM student WHERE classID='".$_GET['idC']."' ORDER BY studentName");
						while ($row = mysql_fetch_array($result)) {
							echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$row['studentID']."</td>";
							echo "<td>".$row['studentName']."</td>";
							echo '<td>
									<a href="index.php?page=viewStudent&idS='.$row['studentID'].'" class="btn btn-primary">View</a>
									<a href="index.php?page=updateStudent&idS='.$row['studentID'].'" class="btn btn-info">Update</a>
									<button class="btn btn-danger" 
									onclick="if(confirm(\'Are you sure to delete this student?\')) 
												window.location.href=\'index.php?page=deleteStudent&idS='.$row['studentID'].'\'">
									Delete</button>
									<button class="btn btn-warning" 
									onclick="if(confirm(\'Are you sure to reset password this student?\')) 
												window.location.href=\'index.php?page=resetPassword&idS='.$row['studentID'].'&idC='.$_GET['idC'].'\'">
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