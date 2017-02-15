<?php
require('connection.php');
$token = $_GET['token'];	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Reset-Password</title>

 <link rel="stylesheet" type="text/css" href="blogstyle.css">
</head>
<body>
<div class="wrapper" style="text-align: center; padding: 150px 550px;">
    <a href="home.php"><img src="blogimg.jpg" style="width: 40%;"></a>
  <h1>RESET PASSWORD?</h1>
  <p>To reset your password type your new password in the password field given below</p>

  <form class="form" method="post" action="new_password.php">
    
    <input type="email" name="email" placeholder="Email" required="">

    <input type="password" name="password" placeholder="New password" required="">

    <input type="hidden" name="_token" value="<?php echo $token ?>">
      
    <input type="submit" class="submit" value="Reset Password">
    
    <h6><a href="http://demoblog.local/register.php">Register Now</a></h6>

    <div>
 
   </div>
  </form>
</div>
</body>
</html>