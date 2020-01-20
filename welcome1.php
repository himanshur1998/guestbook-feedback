<?php 
session_start();
$con=new mysqli("localhost","root","","registration");
$username = $_SESSION['username'];
$service = $_POST['select_service'];
$rating = $_POST['experience'];
$comment = $_POST['comments'];
$result = $con->query("INSERT INTO `feedback` VALUES('$username','$service','$rating','$comment') ");

header('location:welcome.php');