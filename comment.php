<?php

if (!isset($_SESSION['user'])) {
	header('Location: login.php');
}


$user = $_SESSION['user'];
require('connection.php');

$c=$_POST["comment_area"];
$d=$_POST["post_id"];
$insertQuery="INSERT INTO comments(post_id, comment) VALUES (".$d.", '".$c."')";

if ($conn->query($insertQuery)==TRUE) {
   
} else {
   echo "Error".$insertQuery."<br>".$conn->error;
}
 ?>
