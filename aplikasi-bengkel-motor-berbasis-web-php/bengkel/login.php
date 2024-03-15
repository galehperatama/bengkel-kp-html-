<?php
include_once 'includes/config.php';

$config = new Config();
$db = $config->getConnection();

if ($_POST) {

	include_once 'includes/login.inc.php';
	$login = new Login($db);

	$login->userid = $_POST['username'];
	$login->passid = md5($_POST['password']);

	if ($login->login()) {
		echo "<script>location.href='home.php'</script>";
	} else {
		echo "<script>alert('Gagal Total')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ANTO MOBIL</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/abg.png" class="img-circle" width="30%" type="icon" />
</head>

<body>

	<nav class=" navbar navbar-default navbar-static-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">ANTO MOBIL</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>
			<div class="col-xs-12 col-sm-4 col-md-4">

				<div style="margin-top: 100px;" class="panel panel-default">
					<div class="panel-body">
						<div class="text-center">
							<h4><img src="images/abg.png" class="img-circle" width="30%"></h4>
						</div>
						<form method="post">
							<div class="form-group">
								<label for="InputUsername1">Username</label>
								<input type="text" class="form-control" name="username" id="InputUsername1" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="InputPassword1">Password</label>
								<input type="password" class="form-control" name="password" id="InputPassword1" placeholder="Password">
							</div>
							<button type="submit" class="btn btn-primary">Masuk</button>
						</form>
						<br>
						<center>
							<p>Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a></p>
						</center>

					</div>
				</div>

			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
</body>

</html>