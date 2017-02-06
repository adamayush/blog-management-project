<?php
session_start();
if (!isset($_SESSION['user'])) {
	header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Submit-Blog</title>
 <link rel="stylesheet" type="text/css" href="blogstyle.css">
</head>
<body>
<div class="wrapper" style="text-align: center; padding: 200px 550px;">
  <h1>SUBMIT YOUR BLOG HERE</h1>
  <p>Add a subject for you blog and start writing in the text area of blog given below.</p>


  <form class="form" method="post" action="blogpost.php" enctype="multipart/form-data">
    <input type="text" name="subject" placeholder="Subject" required="">
    <textarea rows="10" cols="50" name="comment" placeholder="Enter your blog here..." required=""></textarea>
    <input type="file" name="image" accept="image/gif, image/jpeg, image/png" style="padding-bottom: 20px; color: #fff; size: 15px;">
    <input type="submit" class="submit" value="Submit">
    <div>
    	<?php 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
require('blogpost');

  }
  ?>
    </div>
  </form>
</div>
</body>
</html>