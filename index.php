<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail= new PHPMailer();

$mail->IsSMTP();
// $mail -> SMTPDebug = 1;
$mail->Host = 'tls://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username   = "dtesting847@gmail.com";
$mail->Password   = "password-generate app password form google";
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->SetFrom('dtesting847@gmail.com', 'Dev Testing');
$mail->Subject    = "subject";
$body             = "message";
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
$mail->MsgHTML($body);
$address = "sureshpradhana19@gmail.com";
$mail->AddAddress($address);
if(!$mail->Send()) {
    return 0;
    } else {
        return 1;
    }
