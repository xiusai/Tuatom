<html>
<head>
<title>ThaiCreate.Com PHP Sending Email</title>
</head>
<body>
<?php
	$strTo = "fasaixm@gmail.com";
	$strSubject = "Password for your account ";
	$strHeader = "From: webmaster@thaicreate.com";
	$strMessage = "Your password is here";
	$flgSend = mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //
	if($flgSend)
	{
		echo "Email Sending.";
	}
	else
	{
		echo "Email Can Not Send.";
	}
?>
</body>
</html>