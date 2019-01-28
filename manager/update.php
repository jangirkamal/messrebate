<?php
session_start();
if($_SERVER['REQUEST_METHOD'] === "POST" && $_SESSION['valid'] && $_SESSION['uname'] === 'h2mess') {

	$servername = '';
	$username = '';
	$password = "";
	$dbname = "";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		echo "Connection failed: " . $conn->connect_error;
		header( "refresh:5; url=home.php" );
	} else {
		$sql = "UPDATE rebate SET status='".$_POST["status"]."' WHERE id=".$_POST["id"];
		$conn->query($sql);
		$conn->close();
		header("location:home.php");
	}

} else {
	header("location:index.php");
}
