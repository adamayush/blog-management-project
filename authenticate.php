 <?php
     require('connection.php');
    $a= $_POST["email"];
    $b= $_POST["password"];
    $authQuery = "SELECT * FROM bloguser WHERE Email='".$a."' AND Password= '".$b."'";

    $resultSet = $conn->query($authQuery);
    $invalid="Invalid username or password.";
    
    if($resultSet->num_rows>0)
    {

        $_SESSION['user'] = $resultSet->fetch_assoc();
        header("Location: blog.php");
    exit;
    } else{
        
	echo "<font color='red'>".$invalid."</font>";
    }

    ?>