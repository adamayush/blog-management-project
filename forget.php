<!DOCTYPE html>
<html>
<head>
	<title>Forget-Password</title>

 <link rel="stylesheet" type="text/css" href="blogstyle.css">
</head>
<body>
<div class="wrapper" style="text-align: center; padding: 150px 550px;">
    <a href="home.php"><img src="blogimg.jpg" style="width: 40%;"></a>
  <h1>FORGET PASSWORD?</h1>
  <p>To reset your password type your email in below field and click submit. You will get a url in your email address and then you can reset your password.</p>

  <form class="form" method="post" action="">
    
    
    <input type="email" name="email" placeholder="Email" required="">
      
    <input type="submit" class="submit" value="Submit">
    
    <h6><a href="http://demoblog.local/register.php">Register Now</a></h6>

    <div>
 <?php 
   require('connection.php');
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  	$b = $_POST['email'];
  	$a = "qwertyuiopasd1f2g3h4jk6lz5xc8vbnm";
  	$token = str_shuffle($a);
  	$m = "	<a href='http://demoblog.local/reset.php?token=".$token."'>Click here to reset your password</a>";
  	$authQuery = "UPDATE users SET token='$token' WHERE email='$b'";
  	if ($conn->query($authQuery)==TRUE) {
  		//try{
  		//	$headers  = 'MIME-Version: 1.0' . "\r\n";
		//	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		//	$headers .= 'From:'.'adam.ayush@ithands.biz\n';
		//	if(mail($b, 'Reset Blog Password', $m, $headers)){
//
		//		echo "mail sent";
		//	}else{
		//	echo "mail not sent";
		//	}
		//	}catch(Exception $e){
		//			print_r($e);
		//	}
		require './vendor/autoload.php';
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded 
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = $m;
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

$mail->SetFrom('sharma.ayush141194@gmail.com', 'Ayush');

//$mail->AddReplyTo("user2@gmail.com', 'First Last");

$mail->Subject    = "Reset Blog Password";

//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "adam.ayush@ithands.biz";
$mail->AddAddress($address, "user2");

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}



 										 }
  	
  											}
  ?>

   </div>
  </form>
</div>
</body>
</html>