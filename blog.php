<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('Location: login.php');
}

$user = $_SESSION['user'];
require('connection.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Submit-Blog</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style1.css">

 <link rel="stylesheet" type="text/css" href="blogstyle.css">
</head>
<body>


<div>
<nav class="navbar navbar-inverse" style="background-color: #000;">
 
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="http://demoblog.local/blog.php">New Blog</a></li>
                <li><a href="http://demoblog.local/user_home.php">My Blogs</a></li>

        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown" style="width: 20%;">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <img src="uploads/<?php echo "$user[profile_image]"?>" class="profile-image img-circle" style="width: 30%;"><?php echo "   $user[first_name]"?><b class="caret"></b></a>
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
</div>





<div style="padding: 100px 548px;">
  <h1>SUBMIT YOUR BLOG HERE</h1>
  <p>Add a subject for you blog and start writing in the text area of blog given below.</p>


  <form class="form" method="post" action="blogpost.php" enctype="multipart/form-data">
    <input type="text" name="subject" placeholder="Title" required="">
    <textarea rows="10" cols="50" name="comment" placeholder="Enter your blog here..." required=""></textarea>
    <input type="file" name="image" accept="image/gif, image/jpeg, image/png" style="padding-bottom: 20px;text-align: center; ;color: #fff; size: 15px;">
    <br>
    <input type="submit" class="submit" value="Submit" style="color: #FFFF00;">
    <div>
    </div>
  </form>
</div>
</body>
</html>