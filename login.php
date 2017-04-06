<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="SHORTCUT ICON" href="images/logo.png" />
	<title>Team Formation System</title>

	<!-- Bootstrap Core CSS -->
	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 " align="center">
				<br>
				<img src="images/banner.jpg" width="700" height="150">
			</div>
		</div><br><br>
		<?php
		if(isset($_GET['error'])){
		?>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="alert alert-danger" align="center">
					Your User ID or Password are wrong!!!
				</div>
			</div>
		</div>
		<?php 
		} 
		else{
			echo "<br>";
		}
		?>
		<br>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="glyphicon glyphicon-log-in -o fa-fw"></i> Please Sign In</h3>
					</div>
					<div class="panel-body">
						<form role="form" method="post" action="login1.php">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="User ID" name="userID" type="text" autofocus required>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" type="password"  required>
								</div>
								<input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="bower_components/jquery/dist/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
