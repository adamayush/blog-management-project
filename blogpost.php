<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('Location: login.php');
}

$user = $_SESSION['user'];
require('connection.php');

$c=$_POST["subject"];
$d=$_POST["comment"];

$insertQuery="UPDATE bloguser SET subject='$c', blog='$d' WHERE Email='$user[Email]'";
if ($conn->query($insertQuery)==TRUE) {
   header('Location: home.php');
} else {
   echo "Error".$insertQuery."<br>".$conn->error;
}
 ?>