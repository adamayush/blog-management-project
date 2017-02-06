<?php
session_start();
if (isset($_SESSION['user'])) {
  header('Location: blog.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $serverName="localhost";
  $userName="root";
  $password="";
  $dbName="registerblog";
  $conn=new mysqli($serverName,$userName,$password,$dbName);


  if ($conn->connect_error) {
     die("Connection Failed".$conn->connect_error);
  } else {
     echo "Connected Successfully";
  }


  $a=$_POST["firstname"];
  $b=$_POST["lastname"];
  $c=$_POST["email"];
  $d=$_POST["password"];


  $insertQuery="INSERT INTO bloguser(FirstName,LastName,Email,Password) VALUES ('".$a."', '".$b."', '".$c."', '".$d."')";
  if ($conn->query($insertQuery)==TRUE) {
      header('Location: login.php');
  } else {
     echo "Error".$insertQuery."<br>".$conn->error;
  }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
 <link rel="stylesheet" type="text/css" href="blogstyle.css">
</head>
<body>
<div class="wrapper" style="text-align: center; padding: 200px 550px;">
  <h1>REGISTER FOR FREE</h1>
  <p>To sign-up for a free basic account please provide us with some basic information using
  the contact form below. Please use valid credentials.</p>
  <form class="form" method="post" action="">
    <input type="text" name="firstname" placeholder="First Name" required="">

    <input type="text" name="lastname" placeholder="Last Name" required="">
    
    <input type="email" name="email" placeholder="Email" required="">
      
    <input type="password" name="password" placeholder="Password" required="">  

    <input type="submit" class="submit" value="Register">
    <h6><a href="http://demoblog.local/login.php">Already have account.</a></h6>
  </form>
</div>
</body>
</html>


