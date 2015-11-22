<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Add Personality Type Question</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<a href="index.php?page=personality" class="btn btn-primary">List Personality Type Question</a>
			</div>
		</div><br><br>
		<form action="index.php?page=addPersonality1" method="post">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Question :</b>
				</div>
				<div class="col-lg-7">
					<textarea name="question" class="form-control" required></textarea>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Category :</b>
				</div>
				<div class="col-lg-4">
					<select class="form-control" name="category" required>
						<option value="">-Please Select Category-</option>
						<option value="Extraversion or Introversion">Extraversion or Introversion</option>
						<option value="Sensing or Intuition">Sensing or Intuition</option>
						<option value="Thinking or Feeling">Thinking or Feeling</option>
						<option value="Judging or Perceiving">Judging or Perceiving</option>
					</select>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<a href="index.php?page=personality" class="btn btn-warning">Back</a>
					<input type="submit" class="btn btn-success" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
			</div>
		</form>
	</div>
</div>