<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hostel-5 Online Rebate System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="main.js"></script>
</head>
<body>
    <?PHP session_start(); ?>
    <div id="navbar">Hostel-5 Mess Rebate Portal</div><br>
    <div style="text-align:center;">Welcome &nbsp;  <?php echo $_SESSION['information']['roll_no']; ?></div>
    <br>
    <?php
    if(empty( $_SESSION['information']['roll_no'])){
        header("Location:../rebate/");
    }
    ?>
    <?php               
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
							$sql = "SELECT * FROM rebate WHERE roll=".$_SESSION['information']['roll_no'];
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								echo '<div class="table-responsive" ><table class="table table-striped table-bordered"><tr><th>Timestamp</th><th>Start Date</th><th>End Date</th><th>Status</th></tr>';
								// output data of each row
								while($row = $result->fetch_assoc()) {
									echo "<tr>";
									echo "<td>".$row["timestamp"]."</td>";
									echo "<td>".$row["s_date"]."</td>";
									echo "<td>".$row["e_date"]."</td>";
									echo "<td>".$row["status"]."</td>";
									echo "</tr>";
								}
								echo "</table></div>";
							} else {
								echo "<h4>No Previous Requests.</h4>";
							}
							$conn->close();
						}
					?>

</body>
</html>
