<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Learning Style Survey</h1>
			</div>
		</div>
		<!-- <form action="surveyLearning2.php" method="post"> -->
		<form action="index.php?page=surveyLearning2" method="post">
		<?php
		$i = 1;
		$x = 1;
		// Question for Visual
		$result = mysql_query("SELECT * FROM learning_ques WHERE category='Visual'");
		$v = mysql_num_rows($result);
		while($row = mysql_fetch_array($result)){
		?>
			<div class="row">
				<div class="col-lg-1" align="right">
					<?php echo $i; ?>
				</div>
				<div class="col-lg-8">
					<?php echo $row['learQues']; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-md-offset-1">
					<input type="radio" name="visual<?php echo $x; ?>" value="1" required> Almost Never Applies <br>
					<input type="radio" name="visual<?php echo $x; ?>" value="2" required> Applies Once in a While <br>
					<input type="radio" name="visual<?php echo $x; ?>" value="3" required> Sometimes Applies <br>
					<input type="radio" name="visual<?php echo $x; ?>" value="4" required> Often Applies <br>
					<input type="radio" name="visual<?php echo $x; ?>" value="5" required> Almost Always Applies <br>
				</div>
			</div> <br>
		<?php
		$x++;
		$i++;
		}

		// Question for Auditory
		$result1 = mysql_query("SELECT * FROM learning_ques WHERE category='Auditory'");
		$a = mysql_num_rows($result1);
		$x = 1;

		while($row1 = mysql_fetch_array($result1)){
		?>
			<div class="row">
				<div class="col-lg-1" align="right">
					<?php echo $i; ?>
				</div>
				<div class="col-lg-8">
					<?php echo $row1['learQues']; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-md-offset-1">
					<input type="radio" name="auditory<?php echo $x; ?>" value="1" required> Almost Never Applies <br>
					<input type="radio" name="auditory<?php echo $x; ?>" value="2" required> Applies Once in a While <br>
					<input type="radio" name="auditory<?php echo $x; ?>" value="3" required> Sometimes Applies <br>
					<input type="radio" name="auditory<?php echo $x; ?>" value="4" required> Often Applies <br>
					<input type="radio" name="auditory<?php echo $x; ?>" value="5" required> Almost Always Applies <br>
				</div>
			</div> <br>
		<?php
		$x++;
		$i++;
		}

		// Question for Kinesthetic
		$result2 = mysql_query("SELECT * FROM learning_ques WHERE category='Kinesthetic'");
		$k = mysql_num_rows($result2);
		$x = 1;

		while($row2 = mysql_fetch_array($result2)){
		?>
			<div class="row">
				<div class="col-lg-1" align="right">
					<?php echo $i; ?>
				</div>
				<div class="col-lg-8">
					<?php echo $row2['learQues']; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-md-offset-1">
					<input type="radio" name="kinesthetic<?php echo $x; ?>" value="1" required> Almost Never Applies <br>
					<input type="radio" name="kinesthetic<?php echo $x; ?>" value="2" required> Applies Once in a While <br>
					<input type="radio" name="kinesthetic<?php echo $x; ?>" value="3" required> Sometimes Applies <br>
					<input type="radio" name="kinesthetic<?php echo $x; ?>" value="4" required> Often Applies <br>
					<input type="radio" name="kinesthetic<?php echo $x; ?>" value="5" required> Almost Always Applies <br>
				</div>
			</div> <br>
		<?php
		$x++;
		$i++;
		}
		?>
			<div class="row">
				<div class="col-lg-7" align="center">
					<a href="index.php?page=surveyLearning" class="btn btn-warning">Back</a>
					<input type="submit" class="btn btn-success" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
			</div>
			<input type="hidden" name="v" value="<?php echo $v; ?>">
			<input type="hidden" name="a" value="<?php echo $a; ?>">
			<input type="hidden" name="k" value="<?php echo $k; ?>">
			<input type="hidden" name="bil" value="<?php echo $i; ?>">
		</form>
	</div>
</div>