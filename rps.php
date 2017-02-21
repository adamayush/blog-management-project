<?php
session_start();
require('connection.php');
$_SESSION['Score'] = 0;
 $compScore = 0;
if($_POST['myChoice']){

    $user_choice = $_POST['myChoice'];
     
    $Computer=$_POST['compChoice'];
 
    if($user_choice == $Computer){
    echo 'Result : Draw';
    $_SESSION['Score']= (int)$_SESSION['Score'];
    }
    else if($user_choice == 1 && $Computer == 3){
    echo 'Result : Win';
    $_SESSION['Score']= (int)$_SESSION['Score'] +3;
    }
    else if($user_choice == 1 && $Computer == 2){
    echo 'Result : Lose';
    $compScore = +2.5;
  }

    else if($user_choice == 3 && $Computer == 1){
    echo 'Result : Lose';
    $compScore = +3;
    }
    else if($user_choice == 3 && $Computer == 2){
    echo 'Result : Win';
    $_SESSION['Score']= (int)$_SESSION['Score'] +2;
    }
    else if($user_choice == 2 && $Computer == 1){
    echo 'Result : Win';
    $_SESSION['Score']= (int)$_SESSION['Score'] +2.5;
    }
    else if($user_choice == 2 && $Computer == 3){
    echo 'Result : Lose';
    $compScore = +2;
    }

}
?>