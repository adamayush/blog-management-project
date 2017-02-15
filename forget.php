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
  	$authQuery = "UPDATE users SET token='$token' WHERE email='$b'";
  	if ($conn->query($authQuery)==TRUE) {
     echo "<a href='reset.php?token=".$token."'>"."Click here to reset your password"."</a>";
  }
  	
  }
  ?>

   </div>
  </form>
</div>
</body>
</html>
