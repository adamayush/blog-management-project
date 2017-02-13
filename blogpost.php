<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('Location: login.php');
}


$user = $_SESSION['user'];
require('connection.php');

$c=$_POST["subject"];
$d=$_POST["comment"];


$uploads_dir = 'uploads';
$error = $_FILES["image"]["error"];
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["image"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["image"]["name"]);
        $res = move_uploaded_file($tmp_name, $uploads_dir ."/" . $name);
        if (!$res) {
            echo "Could not upload file"; exit;
        }
    }

$insertQuery="INSERT INTO posts(user_id, title,body,featured_image) VALUES ($user[id], '$c', '$d', '$name')";
if ($conn->query($insertQuery)==TRUE) {
   header('Location: user_home.php');
} else {
   echo "Error".$insertQuery."<br>".$conn->error;
}
 ?>