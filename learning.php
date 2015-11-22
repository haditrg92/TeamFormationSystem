<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Learning Style</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=addLearning" class="btn btn-success">Add Question</a>
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
							<th width="600">Question</th>
							<th>Action</th>
						</tr>
						<?php
						$i = 1;
						$result = mysql_query("SELECT * FROM learning_ques");
						while ($row = mysql_fetch_array($result)) {
							echo "<tr>";
							echo "<td>$i</td>";
							echo "<td>".$row['learQues']."</td>";
							echo '<td>
									<a href="index.php?page=viewLearning&idL='.$row['learQuesID'].'" class="btn btn-primary">View</a>
									<a href="index.php?page=updateLearning&idL='.$row['learQuesID'].'" class="btn btn-info">Update</a>
									<button class="btn btn-danger" 
									onclick="if(confirm(\'Are you sure to delete this question?\')) 
												window.location.href=\'index.php?page=deleteLearning&idL='.$row['learQuesID'].'\'">
									Delete</button>
									</td>';
							echo "</tr>";
							$i++;
						}
						$check = mysql_num_rows($result);
						if($check==0){
							echo "<td colspan='4'><div class='alert alert-danger' align='center'>No Question</div></td>";
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>