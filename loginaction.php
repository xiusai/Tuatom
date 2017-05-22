<?php

session_start();

	$con = mysqli_connect("127.0.0.1","root","","tuatom");

	if(mysqli_connect_errno())
	{
		echo "Failed to connect to databbase" .mysqli_connect_error();
	}

	$Username = mysqli_real_escape_string($con,$_POST['Username']);
	$Password = mysqli_real_escape_string($con,$_POST['Password']);

	/*echo "Username = $Username ";
	echo "Username = $Password ";*/

	$sql = "SELECT Username,Password,PlayerID FROM Player WHERE Username = '$Username' AND Password = '$Password' ";

	$result = mysqli_query($con,$sql);
	
	if(!mysqli_query($con,$sql))
	{
		die('Error :' .mysqli_error($con));
	}

	$ObjResult = mysqli_fetch_array($result);

	if(!$ObjResult)
	{
		/*echo "Invalid Username or Password";*/
		header("refresh:2; url = relogin.php");
		exit();
	}
	else
	{
		$_SESSION['Username'] = $ObjResult['Username'];
		$_SESSION['PlayerID'] = $ObjResult['PlayerID'];
		session_write_close();
		echo "login successful"; 
		echo "<br>";
		echo "Username = ".$_SESSION['Username'];
		echo "<br>";
		echo "PlayerID = ".$_SESSION['PlayerID'];
		header("location : regisform.php");
		/*header("refresh:3; url=showAddress.php");*/
	}

	/*
	$countUsername = mysqli_num_rows($result);
	if($countUsername == 0)
	{
		echo "Invalid Username or Password";
		header("refresh : 2; url = login.html");
	}
	else if($countUsername == 1)
	{
		header("refresh:1; url = showAddress.php");
	}
*/

	/*$InsertOrder = "INSERT INTO order (ItemID,AmountItem,ItemPrice,SubTotalPrice,TotalPrice,OrderAddress,ShippingID)"*/
	mysqli_close($con);
?>
