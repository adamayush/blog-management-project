<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$a=$_POST["fname"];
$b=$_POST["lname"];
$c=$_POST["email"];
$d=$_POST["pno"];
$e=$_POST["pwd"];
$f=$_POST["cpwd"];
if ($e!==$f) {
	echo "Password Does not match";
} else {
}
?>
<a href="file:///home/ayushsharma/Desktop/petbazar/loginblog.html" style="font-size: 20px; text-align: center;">Click Here To Continue</a>
</body>
</html>