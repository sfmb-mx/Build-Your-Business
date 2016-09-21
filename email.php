<?php

//-----------------------------------------------------
//-----------change address to xxx@yourdomainname ----------------------
// $address= "contact@naiknikunj.me";
$address= "s.f.m@ieee.org";
//-----------------------------------------------------
//-----------------------------------------------------

$name = $_POST["name"];
/* $email = $_POST["email"];*/
$email = "jorge@build-yourbusiness.com";
$startup = _POST["startup"];

$phone = $_POST["phone"];
$subject = "Customer contact";
$message_content = $_POST["comments"];

$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $subject <$email>\r\n";

$message = "--$mime_boundary \r\n";

$message .= "You have an email from your web site: \r\n";
$message .= "Name: $name \r\n";
$message .= "Startup: $startup \r\n";
$message .= "phone: $phone \r\n";
$message .= "Message: $message_content \r\n";
$message .= "--$mime_boundary--\r\n";
$mail_sent = mail($address, $subject, $message, $headers);
if($mail_sent)
{
    echo "success";
}
