<?php
require('connection.php');
$user = $_SESSION['user'];
$user_email = $user['email'];
$b=$_POST["comment_area"];
$c=filter_var($b, FILTER_SANITIZE_STRING);
$d=$_POST["post_id"];

$insertQuery="INSERT INTO comments(post_id, user, comment) VALUES ('".$d."', '".$user_email."', '".$c."')";

if ($conn->query($insertQuery)==TRUE) {
}
    else {
	
    echo "Connection failed: " . $error->getMessage();
    
}
 ?>
