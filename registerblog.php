<?php
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
   echo "Record Updated";
} else {
   echo "Error".$insertQuery."<br>".$conn->error;
}


?>
