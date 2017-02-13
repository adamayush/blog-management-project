<?php 
session_start();
require('connection.php');

if (!isset($_SESSION['user'])) {
  header('Location: login.php');
  $blogPost = mysqli_query($conn, "SELECT id, featured_image, title, body FROM posts");

}

$user = $_SESSION['user'];


$blogPost = mysqli_query($conn, "SELECT id, featured_image, title, body FROM posts WHERE user_id='$user[id]'");
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>User-Home-Blog</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="color" style="background-color: #E0FFFF;"> 

<!--topmost bar containing home and other options-->
<nav class="navbar navbar-inverse" style="">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
   
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="http://demoblog.local/blog.php">New Blog</a></li>
                <li><a href="http://demoblog.local/user_home.php">My Blogs</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown" style="width: 40%;">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <img src="uploads/<?php echo "$user[profile_image]"?>" class="profile-image img-circle" style="width: 20%;"><?php echo "    $user[first_name]"?><b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="#">Account</a></li>
        <li class="divider"></li>
        <li><a href="logout.php">Sign-out</a></li>
    </ul>
</li>
        
      </ul>
    </div>
  </div>
</nav>







<!--For the blow out heading with a pic in background  SLIDER-->
<div class="blow">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/bg5.jpg" alt="Image">
        <div class="carousel-caption">
          <h3 class="center">EAT<br>SLEEP<br>BLOG<br>REPEAT</h3>
          <P class="des">We smash you with the information that will make your life easier. <br>KEEP BLOGGING</P>
        </div>      
      </div>

      <div class="item" style="text-align: center;">
        <img src="img/bg4.jpg" alt="Image">
        <div class="carousel-caption">
          <h3 class="center">EAT<br>SLEEP<br>BLOG<br>REPEAT</h3>
          <p class="des">Technical…Practical…Theoretically Interesting.</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>




<div style="background-image: url(img2.jpg); opacity: 0.9">
<div>
	<h2 style="color: #000; text-align: center;font-size: 60px;padding: 50px;"><b><u>BLOGS :</u></b></h2>
</div>

<div style="text-align: center;">

 <?php

while($blogPosts = mysqli_fetch_assoc($blogPost)) {
  ?>
  <div class="container" style="padding-top: 40px;">    
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-primary">
        <div class="panel-heading" style="text-align: center; background-image: url(bgsub.jpg);"><b><?php echo "<font color='#000' size='5'>".$blogPosts['title']."</font>"; echo "<br />";?></b></div>
        <?php
        if(!$blogPosts['featured_image']==null)
        echo "<img width='20%' src='uploads/$blogPosts[featured_image]' />";
        
        ?>

        <div class="subject"><?php
        if (strlen($blogPosts['body'])>=50) {
          $blogPosts['body']=substr($blogPosts['body'], 0, 250);
        
  echo "<font size='3'>".$blogPosts['body']."</font>";
  }
  else
  {
    echo "<font size='3'>".$blogPosts['body']."</font>";
  } 
  echo "<br />";
  echo "<br />";
  echo "<br />";?>
    <div class="panel-footer">
          <a href="http://demoblog.local/user_readmore.php?id=<?php echo $blogPosts['id'] ?>"><u>Read more</u></a>
        </div>
  </div>
     
      </div>
    </div>
  <?php
}
   ?>
</div>
</div>
</body>
</html>
 