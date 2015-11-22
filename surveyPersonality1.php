<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Personality Type Survey</h1>
			</div>
		</div>
		<form action="index.php?page=surveyPersonality2" method="post">
		<?php
		$i = 1;
		$x = 1;
		$result = mysql_query("SELECT * FROM personality_ques WHERE perQuesCategory='Extraversion or Introversion'");
		$ei1 = mysql_num_rows($result);
		while($row = mysql_fetch_array($result)){
		?>
			<div class="row">
				<div class="col-lg-1" align="right">
					<?php echo $i; ?>
				</div>
				<div class="col-lg-8">
					<?php echo $row['perQues']; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-md-offset-1">
					<input type="radio" name="EI<?php echo $x; ?>" value="1" required> Yes <br>
					<input type="radio" name="EI<?php echo $x; ?>" value="0" required> No
				</div>
			</div><br>
		<?php
		$i++;
		$x++;
		}

		$x = 1;
		$result1 = mysql_query("SELECT * FROM personality_ques WHERE perQuesCategory='Sensing or Intuition'");
		$si1 = mysql_num_rows($result1);
		while($row1 = mysql_fetch_array($result1)){
		?>
			<div class="row">
				<div class="col-lg-1" align="right">
					<?php echo $i; ?>
				</div>
				<div class="col-lg-8">
					<?php echo $row1['perQues']; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-md-offset-1">
					<input type="radio" name="SI<?php echo $x; ?>" value="1" required> Yes <br>
					<input type="radio" name="SI<?php echo $x; ?>" value="0" required> No
				</div>
			</div><br>
		<?php
		$i++;
		$x++;
		}

		$x = 1;
		$result2 = mysql_query("SELECT * FROM personality_ques WHERE perQuesCategory='Thinking or Feeling'");
		$tf1 = mysql_num_rows($result2);
		while($row2 = mysql_fetch_array($result2)){
		?>
			<div class="row">
				<div class="col-lg-1" align="right">
					<?php echo $i; ?>
				</div>
				<div class="col-lg-8">
					<?php echo $row2['perQues']; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-md-offset-1">
					<input type="radio" name="TF<?php echo $x; ?>" value="1" required> Yes <br>
					<input type="radio" name="TF<?php echo $x; ?>" value="0" required> No
				</div>
			</div><br>
		<?php
		$i++;
		$x++;
		}

		$x = 1;
		$result3 = mysql_query("SELECT * FROM personality_ques WHERE perQuesCategory='Judging or Perceiving'");
		$jp1 = mysql_num_rows($result3);
		while($row3 = mysql_fetch_array($result3)){
		?>
			<div class="row">
				<div class="col-lg-1" align="right">
					<?php echo $i; ?>
				</div>
				<div class="col-lg-8">
					<?php echo $row3['perQues']; ?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-md-offset-1">
					<input type="radio" name="JP<?php echo $x; ?>" value="1" required> Yes <br>
					<input type="radio" name="JP<?php echo $x; ?>" value="0" required> No
				</div>
			</div><br>
		<?php
		$i++;
		$x++;
		}
		?>
			<div class="row">
				<div class="col-lg-7" align="center">
					<a href="index.php?page=surveyPersonality" class="btn btn-warning">Back</a>
					<input type="submit" class="btn btn-success" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset"><br><br><br>
				</div>
			</div>
			<!-- <input type="hidden" name="bil" value="<?php echo $i; ?>"> -->
			<input type="hidden" name="ei1" value="<?php echo $ei1; ?>">
			<input type="hidden" name="si1" value="<?php echo $si1; ?>">
			<input type="hidden" name="tf1" value="<?php echo $tf1; ?>">
			<input type="hidden" name="jp1" value="<?php echo $jp1; ?>">
		</form>
	</div>
</div>