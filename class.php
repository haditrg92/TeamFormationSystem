<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Program</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=addClass" class="btn btn-success">Add Program</a>
				<a href="index.php?page=allClass" class="btn btn-primary">List All Program</a>
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
							<th width="400">Program</th>
							<th>Action</th>
						</tr>
						<?php
						$i = 1;
						$result = mysql_query("SELECT * FROM class WHERE status='Active'");
						while ($row = mysql_fetch_array($result)) {
							echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$row['className']." Batch ".$row['batch']."</td>";
							echo '<td>
									<a href="index.php?page=viewClass&idC='.$row['classID'].'" class="btn btn-primary">View</a>
									<a href="index.php?page=updateClass&idC='.$row['classID'].'" class="btn btn-info">Update</a>
									<button class="btn btn-danger" 
									onclick="if(confirm(\'Are you sure to delete this class?\')) 
												window.location.href=\'index.php?page=deleteClass&idC='.$row['classID'].'\'">
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