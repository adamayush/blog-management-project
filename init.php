<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}

$user = $_SESSION['user'];
require('connection.php');
?>