<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Personality Type Survey</h1>
			</div>
		</div>
		<?php
		$userID = $_SESSION['userID'];
		$result = mysql_query("SELECT * FROM current_semester");
		$row = mysql_fetch_array($result);

		$result1 = mysql_query("SELECT * FROM personality WHERE studentID='$userID' AND semesterID='".$row['semesterID']."'");
		$check = mysql_num_rows($result1);

		if($check==0){
		?>
		<div class="row">
			<div class="col-lg-12" align="center">
				<a href="index.php?page=surveyPersonality1" class="btn btn-success">Answer Survey Personality Type</a>
				<br>
			</div>
		</div>
		<?php
		}
		else{
		?>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="alert alert-success" align="center">
					You already answer the survey for this semester.<br>
					<a href="index.php?page=sAnalysisPersonality" class="alert-link">See Result</a>
				</div>
			</div>
		</div>
		<?php
		}
		?>
	</div>
</div>