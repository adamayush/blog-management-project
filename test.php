<?php
//try{
//	$header = 'From:'.'parker.pankaj@ithands.biz\n';
//	if(mail('parker.pankaj@ithands.biz', 'Alert', 'You Have Been Hacked', $header)){
//
//		echo "mail sent";
//	}else{
//		echo "mail not sent";
//	}
//}catch(Exception $e){
//	print_r($e);
//}
require './vendor/autoload.php';
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded 
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = "see this";
//$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
//$mail->Host       = "ssl://smtp.gmail.com"; // SMTP server
//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "sharma.ayush141194@gmail.com";  // GMAIL username
$mail->Password   = "loveusamu";            // GMAIL password

$mail->SetFrom('adam.ayush@ithands.biz', 'Ayush');

//$mail->AddReplyTo("user2@gmail.com', 'First Last");

$mail->Subject    = "hello";

//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "nicole.priyamvada@ithands.biz";
$mail->AddAddress($address, "user2");

$mail->AddAttachment("blogimg.jpg");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>