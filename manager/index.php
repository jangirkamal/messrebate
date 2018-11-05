<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<title>
		H5 Mess Rebate Management
		</title>
	</head>
	<body style="background-color:#DDDDDD;">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand">H5 Mess Rebate  </a>
				</div>
			</div>
		</nav>
		<br><br><br><br>
		<?php
		session_start();
		if ($_SESSION['valid'] && $_SESSION['uname'] === 'h5mess') {
		header("location:home.php");
		}
		?>
		<div class="container"><div class="row"><div class="col-sm-12" style="background-color: #FFFFFF; box-shadow: 3px 3px 2px grey; padding: 5px 20px; margin: 0px 10px;">
			<form action="home.php" method="post" class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-sm-1">Username:</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" name="uname" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-1">Password:</label>
					<div class="col-sm-5">
						<input type="password" class="form-control" name="passwd" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-1 col-sm-5">
						<button type="submit" class="btn btn-default">Login</button>
					</div>
				</div>
			</form>
		</div></div></div>
	</body>
</html>
