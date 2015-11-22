<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Change Profile Picture</h1>
			</div>
		</div><br>
		<form action="index.php?page=sProfilePic1" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>File Upload:</b>
				</div>
				<div class="col-lg-4">
					<input type="file" name="file">
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<a href="index.php?page=sProfile" class="btn btn-warning">Back</a>
					<input type="submit" value="Submit" class="btn btn-success">
					<input type="reset" value="Reset" class="btn btn-danger">
				</div>
			</div>
		</form>
	</div>
</div>