<?php 
session_start();
require('connection.php');
$id = $_GET['id'];

$bloglikes = mysqli_query($conn, "SELECT * FROM likes LIMIT 1");
$bloglikes = $bloglikes->fetch_assoc();

if ($bloglikes['dislike_count']==null) {

$authQuery = "INSERT INTO likes(post_id, dislike_count) VALUES ('$id', '0')";

    $resultSet = $conn->query($authQuery);
}

$bloglikes = mysqli_query($conn, "SELECT * FROM likes WHERE post_id='$id' ");
$bloglikes = $bloglikes->fetch_assoc();
if($bloglikes['dislike_count']==null)
{
$authQ = "INSERT INTO likes(post_id, dislike_count) VALUES ('$id', '1')";

    $resultSet = $conn->query($authQ);
}
    $bloglikes = mysqli_query($conn, "SELECT * FROM likes WHERE post_id='$id' ");
$bloglikes = $bloglikes->fetch_assoc();
if($bloglikes['dislike_count']!=null)
{
    $bloglikes['dislike_count'] = $bloglikes['dislike_count']+1;
    $authQuer = "UPDATE likes SET dislike_count='$bloglikes[dislike_count]' WHERE post_id='$id'";

    $resultSet = $conn->query($authQuer);
}
$likes = mysqli_query($conn, "SELECT dislike_count FROM likes WHERE post_id='$id' LIMIT 1");
$likes = $likes->fetch_assoc();
echo $bloglikes['dislike_count'];

?>
