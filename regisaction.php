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

$checkname = mysqli_query($con,"SELECT Username FROM Player WHERE Username = '$username'");
$checkmail = mysqli_query($con,"SELECT Email FROM Player WHERE Email = '$email'");
$countN = mysqli_num_rows($checkname);
$countM = mysqli_num_rows($checkmail);

if($countN == 0 && $countM == 0 ){
	$sql="INSERT INTO Player (Username,Password, Email, CreditCard, expiry_month, expiry_year, cvv )
	VALUES ('$username', '$password','$email' , '$creditcard', '$expiry_month', '$expiry_year', '$cvv')";
	if (!mysqli_query($con,$sql)) 
	{
		die('Error: ' . mysqli_error($con));
	}
	echo "Thank you for registration $countM $countN";

header("refresh:5; url = login.php");

}
else if($countN==0 && $countM != 0){
	echo "E-mail : $email is already have an account";
		header("refresh:4; url = regisform.php");

}
else if($countN!=0 && $countM == 0){
	echo "Username : $username is already used";
		header("refresh:4; url = regisform.php");
	
}
else if($countN!=0 && $countM != 0){
echo "Both $username and $email already have an account";
header("refresh:4; url = regisform.php");
}
mysqli_close($con);

?>