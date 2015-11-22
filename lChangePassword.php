<script>
function check(){
	var pass1 = document.forms['form']['new'].value;
	var pass2 = document.forms['form']['confirm'].value;

	if(pass1==pass2){
		return true;
	}
	else{
		alert('New password must be same with confirm new password!!!');
		return false;
	}
}	
</script>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Change Password</h1>
			</div>
		</div><br>
		<form action="index.php?page=lChangePassword1" method="post" onsubmit="return check()" name="form">
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Old Password :</b>
				</div>
				<div class="col-lg-3">
					<input type="password" name="old" class="form-control" required>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>New Password :</b>
				</div>
				<div class="col-lg-3">
					<input type="password" name="new" class="form-control" required>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3" align="right">
					<b>Confirm New Password :</b>
				</div>
				<div class="col-lg-3">
					<input type="password" name="confirm" class="form-control" required>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-4 col-md-offset-3">
					<a href="index.php?page=lProfile" class="btn btn-warning">Back</a>
					<input type="submit" class="btn btn-success" value="Submit">
					<input type="reset" class="btn btn-danger" value="Reset">
				</div>
			</div>
		</form>
	</div>
</div>