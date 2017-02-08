<?php
session_start();
if (isset($_SESSION['user'])) {
  header('Location: blog.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  require('connection.php');


  $a=$_POST["firstname"];
  $b=$_POST["lastname"];
  $c=$_POST["email"];
  $d=$_POST["password"];

$invalid="You can use only alphabets in First and Last name.";
if (is_numeric($a)||is_numeric($b)) {
echo "<font color='red'>".$invalid."</font>";
exit;
}



  $insertQuery="INSERT INTO bloguser(FirstName,LastName,Email,Password) VALUES ('".$a."', '".$b."', '".$c."', '".$d."')";
  if ($conn->query($insertQuery)==TRUE) {
      header('Location: login.php');
  } else {
     echo "Error".$insertQuery."<br>".$conn->error;
  }
}

?>