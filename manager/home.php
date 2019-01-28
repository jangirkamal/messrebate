<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="jq/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<title>
		H5 Mess Rebate Management
		</title>
	</head>
	<body style="background-color:#DDDDDD;">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span> 
		            </button>
					<a class="navbar-brand">H5 Mess Rebate Management</a>
				</div>
				<div class="collapse navbar-collapse">
					<form class="navbar-form navbar-right" action="logout.php">
						<button type="submit" class="btn btn-default">Logout</button>
					</form>
				</div>
			</div>
		</nav>
		<br><br><br><br>
		<div class="container">
			<div class="row">
			<div class="col-sm-12" style="background-color: #FFFFFF; box-shadow: 3px 3px 2px grey; padding: 5px 20px; margin: 0px 10px;">
			<?php
			session_start();
			if (($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['uname'] === 'h5mess' && $_POST['passwd'] === 'mess@h5') || $_SESSION['valid'] && $_SESSION['uname'] === 'h5mess') {
		
				$_SESSION['valid'] = TRUE;
				$_SESSION['uname'] = 'h5mess';
				
					$servername = '';
					$username = 'hostel5';
					$password = "";
					$dbname = "hostel5";
					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
						echo "Connection failed: " . $conn->connect_error;
					} else {
						$sql = "SELECT * FROM rebate";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							echo '<div class="table-responsive"><table class="table table-bordered"><tr><th>Timestamp</th><th>Name</th><th>Roll No</th><th>Card No</th><th>Start</th><th>End</th><th>Status</th><th></th></tr>';
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo "<tr>";
									echo "<td>".$row["timestamp"]."</td>";
									echo "<td>".$row["name"]."</td>";
									echo "<td>".$row["roll"]."</td>";
									echo "<td>".$row["cno"]."</td>";
									echo "<td>".$row["s_date"]."</td>";
									echo "<td>".$row["e_date"]."</td>";
									echo "<td>".$row["status"]."</td>";
									echo "<td>";
										echo '<form action="update.php" method="post"><input type="hidden" name="id" value="'.$row["id"].'"><input type="hidden" name="status" value="Approved"><button type="submit" class="btn btn-default">Approve</button></form>';
										echo '<form action="update.php" method="post"><input type="hidden" name="id" value="'.$row["id"].'"><input type="hidden" name="status" value="Rejected"><button type="submit" class="btn btn-default">Reject</button></form>';
									echo "</td>";
								echo "</tr>";
							}
						echo "</table></div>";
					} else {
						echo "<h4>No Requests.</h4>";
					}
					$conn->close();
				}
		} else {
			echo "<h4>Invalid Login</h4>";
			header( "refresh:2; url=index.php" );
		}
		?>
		</div>
		</div>
	</div>
</body>
</html>
