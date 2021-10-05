<?php
	require_once('PHPmailer/class.phpmailer.php');

	$senderemail = $_POST["senderemail"];


	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = false; // authentication enabled
	$mail->SMTPSecure = 'none'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = "localhost";
	$mail->Port = 25; // or 587
	$mail->IsHTML(true);
	$mail->Username = " ";
	$mail->Password = " ";
	$mail->SetFrom($senderemail);
	$mail->Subject = "New Class Notification Request";
	$mail->Body = "
			<b>New Class Notification Request at Montance</b><br/><br/>
			<b>Email: </b>{$senderemail}<br/>
			";
	$mail->AddAddress("xavier32denis@gmail.com");

	 if(!$mail->Send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	 } else {
	    echo "Message has been sent";
	 }
	 
?>