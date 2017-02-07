<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('Location: login.php');
}


$user = $_SESSION['user'];
require('connection.php');

$c=$_POST["subject"];
$d=$_POST["comment"];


$uploads_dir = '/uploads';
foreach ($_FILES["image"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["image"]["tmp_name"][$key];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["image"]["name"][$key]);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
        var_dump($name);exit;
    }
}

$insertQuery="INSERT INTO bloguser(Email,subject,blog,image) VALUES ('$user[Email]', '".$c."', '".$d."', '".$name."')";
if ($conn->query($insertQuery)==TRUE) {
   header('Location: home.php');
} else {
   echo "Error".$insertQuery."<br>".$conn->error;
}
 ?>