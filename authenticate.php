
    <?php
    require('connection.php');
   $a= $_POST["email"];
   $b= $_POST["password"];
    $c= filter_var($a, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($a, FILTER_VALIDATE_EMAIL) === false) {
} else {
    echo("$a is not a valid email address");

}
   $authQuery = "SELECT * FROM users WHERE email='".$c."' AND password= '".$b."'";

   $resultSet = $conn->query($authQuery);
   $invalid="Invalid username or password.";
   if($resultSet->rowCount()>0)
   {
 $_SESSION['user'] = $resultSet->fetch(PDO::FETCH_ASSOC);
  exit;
   } else{
        
   echo "<font color='red'>".$invalid."</font>";
 }
    ?>