<?php
session_start();
unset($_SESSION['valid']);
unset($_SESSION['uname']);
session_destroy();
header("location:index.php");
?>