<?php
function getRandomColor() {
   
    
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
 $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
?>
<div style="background-color: <?php echo "$color"; ?>"></div>
</body>
</html>