<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
 <link rel="stylesheet" type="text/css" href="blogstyle.css">
</head>
<body>
<div class="wrapper" style="text-align: center; padding: 100px 550px;">
  <h1>REGISTER FOR FREE</h1>
  <p>To sign-up for a free basic account please provide us with some basic information using
  the contact form below. Please use valid credentials.</p>
  <form class="form" method="post" action="" enctype="multipart/form-data">
    <input type="text" name="firstname" placeholder="First Name" required="">

    <input type="text" name="lastname" placeholder="Last Name" required="">
    
    <input type="email" name="email" placeholder="Email" required="">
      
    <input type="password" name="password" placeholder="Password" required="">  
     
     <label style="color: #FFF;">Upload A Profile Image</label>
    <input type="file" name="pimage" accept="image/gif, image/jpeg, image/png" style="padding-bottom: 20px; color: #fff; size: 15px;">

    <input type="submit" class="submit" value="Register">
    <h6><a href="http://demoblog.local/login.php">Already have account.</a></h6>
  </form>
   <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
     require('registerdb.php');
?>
</div>
</body>
</html>


