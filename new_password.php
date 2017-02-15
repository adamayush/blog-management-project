<?php
session_start();
require('connection.php');
$token = $_POST['_token'];
$a = $_POST['email'];
$b = $_POST['password'];
$Query = "SELECT token FROM users WHERE email='".$a."'";
$Set = mysqli_fetch_assoc($conn->query($Query))['token'];

if ($Set==$token) {
$authQuery = "UPDATE users SET password='$b' WHERE email='$a'";
$resultSet = $conn->query($authQuery);

if ($resultSet==true) {
		$_SESSION['response'] = [];
		$_SESSION['response']['type'] = 'success';
		$_SESSION['response']['message'] = 'Password reset successfully';
      header('Location: login.php');
}}
 else {
     header('Location: reset.php');
  }
?>