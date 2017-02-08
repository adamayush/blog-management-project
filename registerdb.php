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

      

//uploading the image
  $uploads_dir = 'uploads';
$error = $_FILES["pimage"]["error"];
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["pimage"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["pimage"]["name"]);
        $res = move_uploaded_file($tmp_name, $uploads_dir ."/" . $name);
      
        if (!$res) {
            echo "Could not upload file"; exit;
      }
   }


//inserting data into the database
  $insertQuery="INSERT INTO users(first_name,last_name,email,password,profile_image) VALUES ('$a', '$b', '$c', '$d', '$name')";

  if ($conn->query($insertQuery)==TRUE) {
      header('Location: login.php');
  } else {
    $exist="Email Already Exist<br>Use Another Email.";
     echo "<font color='red'>".$exist."</font>";
  }
}

?>