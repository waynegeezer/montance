<?php
function Send_Mail($to,$subject,$body,$from)
{
require_once ('class.phpmailer.php');
// $from 				= "email here";
$mail 				= new PHPMailer();

$mail->SetFrom($from, 'New Request');
$mail->AddReplyTo($from,'New Request');
$mail->Subject 		= $subject;
$mail->MsgHTML($body);
$address 			= $to;
$mail->AddAddress($address, $to);

/*if(!$mail->Send())
return false;
else
return true;*/
if($mail->Send()){
    echo "Message sent successfully";
}else{
    echo "Mailer Error: " . $mail->ErrorInfo;
}

}
?>