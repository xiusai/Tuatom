<?php

include "config/config.php";
$con = mysqli_connect($config['host'],$config['username'],$config['password'],$config['dbname']);
if (mysqli_connect_errno()) 
{
echo "Failed to connect to MySQL: " .mysqli_connect_error();
}

// escape variables for security
$username = mysqli_real_escape_string($con, $_POST['Username']);
$password = mysqli_real_escape_string($con, $_POST['Password']);
$email = mysqli_real_escape_string($con, $_POST['Email']);
$creditcard = mysqli_real_escape_string($con, $_POST['CreditCard']);
$expiry_month = mysqli_real_escape_string($con, $_POST['expiry_month']);
$expiry_year = mysqli_real_escape_string($con, $_POST['expiry_year']);
$cvv = mysqli_real_escape_string($con, $_POST['cvv']);

$sql="INSERT INTO Player (Username,Password, Email, CreditCard, expiry_month, expiry_year, cvv )
VALUES ('$username', '$password','$email' , '$creditcard', '$expiry_month', '$expiry_year', '$cvv')";
if (!mysqli_query($con,$sql)) 
{
	die('Error: ' . mysqli_error($con));
}

mysqli_close($con);

header("location: login.php");

?>