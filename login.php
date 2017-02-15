<?php
session_start();
if (isset($_SESSION['user'])) {
  header('Location: blog.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

 <link rel="stylesheet" type="text/css" href="blogstyle.css">

</head>
<body>
<div class="wrapper" style="text-align: center; padding: 150px 550px;">
    <a href="home.php"><img src="blogimg.jpg" style="width: 40%;"></a>
  <h1>LOGIN</h1>
  <p>To login you should be registered once if not click on the register now link below.</p>
  <?php  if(isset($_SESSION['response'])) {
          if ($_SESSION['response']['type'] == 'success') {
              echo '<div class="message-box success">';
          if ($_SESSION['response']['type'] == 'error') {
              echo '<div class="message-box error">';
          }

          echo $_SESSION['response']['message'];
          echo "</div>";
        }
      }
          ?>



  <form class="form" method="post" action="">
    
    
    <input type="email" name="email" placeholder="Email" required="">
      
    <input type="password" name="password" placeholder="Password" required="">  

    <input type="submit" class="submit" value="Login">
    
    <h6><a href="http://demoblog.local/register.php">Register Now</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://demoblog.local/forget.php">Forget Password?</a></h6>

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



