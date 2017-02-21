<?php 
session_start();
require('connection.php');
$id = $_GET['id'];
$bloglikes = "SELECT * FROM likes LIMIT 1";
$bloglikes = $conn->query($bloglikes);
$bloglikes = $bloglikes->fetch(PDO::FETCH_ASSOC);

if ($bloglikes['likes_count']==null) {

$authQuery = "INSERT INTO likes(post_id, likes_count) VALUES ('$id', '0')";

    $resultSet = $conn->query($authQuery);
}
{

$bloglikes = "SELECT * FROM likes WHERE post_id='$id'";
$bloglikes = $conn->query($bloglikes);
$bloglikes = $bloglikes->fetch(PDO::FETCH_ASSOC);
if($bloglikes['likes_count']==null)
{
$authQ = "INSERT INTO likes(post_id, likes_count) VALUES ('$id', '1')";

    $resultSet = $conn->query($authQ);
}
//     $bloglikes = "SELECT * FROM likes WHERE post_id='$id' ";
//     $bloglikes = $conn->query($bloglikes);
// $bloglikes = $bloglikes->fetch(PDO::FETCH_ASSOC);
else//if($bloglikes['likes_count']!=null)
{
	$bloglikes['likes_count'] = $bloglikes['likes_count']+1;
	$authQuer = "UPDATE likes SET likes_count='$bloglikes[likes_count]' WHERE post_id='$id'";

    $resultSet = $conn->query($authQuer);
}
}
$bloglikes = "SELECT likes_count FROM likes WHERE post_id='$id' LIMIT 1";
$bloglikes = $conn->query($bloglikes);
$bloglikes = $bloglikes->fetch(PDO::FETCH_ASSOC);
echo $bloglikes['likes_count'];

?>
