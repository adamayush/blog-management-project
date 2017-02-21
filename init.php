<?php 
session_start();
require('connection.php');
$id = $_GET['id'];
$bloglikes = "SELECT dislike_count FROM likes LIMIT 1";
$bloglikes = $conn->query($bloglikes);
$bloglikes = $bloglikes->fetch(PDO::FETCH_ASSOC);

if ($bloglikes['dislike_count']==null) {

$authQuery = "INSERT INTO likes(post_id, dislike_count) VALUES ('$id', '0')";

    $resultSet = $conn->query($authQuery);
}
{

$bloglikes = "SELECT dislike_count FROM likes WHERE post_id='$id'";
$bloglikes = $conn->query($bloglikes);
$bloglikes = $bloglikes->fetch(PDO::FETCH_ASSOC);
if($bloglikes['dislike_count']==null)
{
$authQ = "INSERT INTO likes(post_id, dislike_count) VALUES ('$id', '1')";

    $resultSet = $conn->query($authQ);
}
else
{
	$bloglikes['dislike_count'] = $bloglikes['dislike_count']+1;
	$authQuer = "UPDATE likes SET dislike_count='$bloglikes[dislike_count]' WHERE post_id='$id'";

    $resultSet = $conn->query($authQuer);
}
}
$bloglikes = "SELECT dislike_count FROM likes WHERE post_id='$id' LIMIT 1";
$bloglikes = $conn->query($bloglikes);
$bloglikes = $bloglikes->fetch(PDO::FETCH_ASSOC);
echo $bloglikes['dislike_count'];

?>
