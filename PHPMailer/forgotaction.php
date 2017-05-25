<?php
require 'PHPMailerAutoload.php';

$con = mysqli_connect("127.0.0.1","root","","tuatom");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to databbase" .mysqli_connect_error();
	}
	$Email = mysqli_real_escape_string($con,$_POST['Email']);
	
	//echo "mail = $Email ";
	$sql = "SELECT Username,Password FROM Player WHERE Email = '$Email' ";
	$result = mysqli_query($con,$sql);
	
	if(!mysqli_query($con,$sql))
	{
		die('Error :' .mysqli_error($con));
	}

	while($data = mysqli_fetch_array($result)) {
		$name = $data["Username"];
		$pass = $data["Password"];

	}

		if(!$name)
	{
		//echo "Invalid Email";
		header("refresh:0; url = invalidmail.php");
		exit();
	}

///////////////////////////////////////////

$mail = new PHPMailer;
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'fasaixm@gmail.com';                 // SMTP username
$mail->Password = '0823449499';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('fasaixm$gmail.com', 'Lets Get Bright Official');
$mail->addAddress($Email, 'Joe User');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Password for your account';
$mail->Body    = 'Your username is '. $name .' and Your Password is '.$pass.'.';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    header("refresh:0; url = invalidmail.php");

} else {
    echo 'Message has been sent';
}
header("refresh:1; url = sendpass.php");


?>
