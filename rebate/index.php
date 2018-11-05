<?php
session_start();
$_SESSION['information']['roll_no']='170040064';
// $roll=$_SESSION['information]['roll];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hostel-5 Online Rebate System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/main.css" />
    <link rel="stylesheet" href="../css/w3.css">
    <script src="main.js"></script>
</head>
<body>
    <div id="navbar">Hostel-5 Mess Rebate Portal</div>
    <br>
    <form action="../action/" method="POST" id="form">
    <div id="box">
        <p id="Welcome"> Welcome <?php echo '170040064' ?> </p>
        <label for="name">Name </label><input type="text" name="name" class="w3-input" required placeholder="Name"><br>
        <label for="card_no">Card No. </label><input type="text" name="cno" class="w3-input" required placeholder="Card No."> <br>
        <label for="start_date">Start Date</label><input type="date" name="s_date" class="w3-input" required placeholder="Start Date"> <br>
        <label for="end_date">End Date</label><input type="date" name="e_date" class="w3-input" required placeholder="End Date"><br>
        <input type="hidden" name="h_input" class="w3-input" value="1">
        <button id="submit" type="submit" class="w3-button">Submit</button>
        <button type="reset" id="reset" class="w3-button">Reset</button>
    </div>
    </form>
    <br><br><br>
<div id="bottom"><p> 	&copy;  	&nbsp;2018 <a href="mailto:jangirkamal@iitb.ac.in">Kamal Jangir | IIT Bombay</a></p></div>
</body>
</html>