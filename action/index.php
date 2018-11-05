
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Mess Rebate Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/main.css">
</head>

<body style="background-color:#DDDDDD;">

  <div id="navbar">Hostel-5 Mess Rebate Portal</div>

<br><br><br><br>

<div style="text-align:center;">
<h4>

<?php
	session_start();

	if (isset($_SESSION['information']['roll_no']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $roll=$_SESSION['information']['roll_no'];
        $name=$_POST['name'];
        $cno=$_POST['cno'];
        $sdate=$_POST['s_date'];
        $edate=$_POST['e_date'];
		$days = round((strtotime($edate) - strtotime($sdate)) / (60 * 60 * 24)) + 1;
		date_default_timezone_set('Asia/Kolkata');
		$today = date('Y-m-d');
		$after2 = (time() >= strtotime("14:00:00"));


		if (($after2 && round((strtotime($sdate) - strtotime($today)) / (60 * 60 * 24)) > 1) || (!$after2 && round((strtotime($sdate) - strtotime($today)) / (60 * 60 * 24)) > 0)) {

			if ($days > 2 && $days < 11) {

					$servername = '10.105.177.5';
					$username = 'hostel5';
					$password = "manmohansingh";
					$dbname = "hostel5";

				$conn = new mysqli($servername, $username, $password, $dbname);

				if ($conn->connect_error) {
					echo "Connection failed: " . $conn->connect_error;
				} else {

					$sql = "INSERT INTO rebate (name, roll, cno, s_date, e_date) VALUES ('$name', '$roll', '$cno', '$sdate', '$edate');";

					if ($conn->query($sql) === TRUE) {
    					echo "New request added successfully.";
					} else {
 					  echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$conn->close();
				}

			} else {
				echo "No of days for rebate should be minimum 3 and maximum 10";
			}
			
		} else {
			echo "You can apply for rebate only before 2pm of the day previous to start day";
		}
			
		echo '<br><br><form action="../rebate/"><button type="submit" class="btn btn-default">Back</button></form>';

	} 

	else {
		echo "Invalid auth";
		header( "refresh:2; url=../rebate/" );
		die();
	}
		
	
?>

</h4>
</div>

</body>
</html>

