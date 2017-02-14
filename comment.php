<?php

require('connection.php');

$c=$_POST["comment_area"];
$d=$_POST["post_id"];
$insertQuery="INSERT INTO comments(post_id, comment) VALUES (".$d.", '".$c."')";

if ($conn->query($insertQuery)==TRUE) {
   
} else {
	mysqli_error($conn);
	die($conn->error);
   echo "Error".$insertQuery."<br>".$conn->error;
}
 ?>
