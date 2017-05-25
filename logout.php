<?php
	session_start();
	session_destroy();
	unset($_SESSION['Username']);
	$_SESSION['message'] = "You are logout";
	header("location: login.php");
	?>
