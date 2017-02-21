<?php
$serverName="localhost";
$userName="root";
$password="";
$dbName="registerblog";
$conn=new mysqli($serverName,$userName,$password,$dbName);


if ($conn->connect_error) {
   die("Connection Failed".$conn->connect_error);
} else {
   echo "";
}
?>
<?php
//$serverName="localhost";
//$userName="root";
//$password="";
//try {
//    $conn = new PDO("mysql:host=localhost;dbname=registerblog", $userName, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   // echo "Connected successfully"; 
//    }
//catch(PDOException $e)
//    {
//    echo "Connection failed: " . $e->getMessage();
//    }
?>