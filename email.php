<?php

//-----------------------------------------------------
//-----------change address to xxx@yourdomainname -----
/* $address= "jorge@build-yourbusiness.com";*/
$address= "s.f.m@ieee.org";
//-----------------------------------------------------
//-----------------------------------------------------

$name = $_POST["name"];
$startup = $_POST["startup"];
$yrole = $_POST["yrole"];
$phone = $_POST["phone"];
$webpage = $_POST["webpage"];
$market = $_POST["market"];
$stage = $_POST["stage"];
$challenge = $_POST["challenge"];
/* $email = $_POST["email"];*/
$email = 'jorge@build-yourbusiness.com';

$subject = "A Build YourBusiness customer sent a message to you!";
$message_content = $_POST["comments"];

$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $subject <$email>\r\n";

$message = "--$mime_boundary \r\n";

$message .= "You have an email from your web site: \r\n\n";
$message .= "Name: $name \r\n";
$message .= "Startup: $startup \r\n";
$message .= "Role: $yrole \r\n";
$message .= "Phone: $phone \r\n";
$message .= "Webpage: $webpage \r\n";
$message .= "Market: $market \r\n";
$message .= "Stage: $stage \r\n";
$message .= "challenge: $challenge \r\n";
$message .= "Message: $message_content \r\n";
$message .= "--$mime_boundary--\r\n";
$mail_sent = mail($address, $subject, $message, $headers);
if($mail_sent)
{
    echo "success";
}
