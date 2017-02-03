<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
 <link rel="stylesheet" type="text/css" href="blogstyle.css">
</head>
<body>
<div class="wrapper" style="text-align: center; padding: 200px 550px;">
  <h1>LOGIN</h1>
  <p>To login you should be registered once if not click on the register now link below.</p>
  <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    
    
    <input type="email" name="email" placeholder="Email" required="">
      
    <input type="password" name="password" placeholder="Password" required="">  

    <input type="submit" class="submit" value="Login">
    
    <h6><a href="http://demoblog.local/register.html">Register Now</a></h6>

    <div>
 <?php 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  	require('authenticate.php');
  }
  ?>

   </div>
  </form>
</div>
</body>
</html>



