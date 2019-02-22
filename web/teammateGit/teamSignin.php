<?php
session_start();
require "databaseConnect.php";
$db = get_db();
unset($_SESSION["msg"]);
?>
<!DOCTYPE html>
<html>
<head>
<!-- Styling for HTML -->

<link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Page begins here -->
<h1>Week 07 Team Registration</h1><hr>

<!-- Navigation Bar -->
<div style="width: 463.1px; margin: 0 auto;">
  <ul align="center">
  	<div class ="tooltip"><li><a href="teamWelcome.php">Home</a></li></div>
  	<div class="tooltip"><li><a href="teamRegistration.php">Sign-Up</a></li></div>
  	<div class="active"><li><a href="teamSignin.php">Sign-In</a></li></div>
  </ul>
</div><hr>
<!-- Page Starts Here -->
<form method="POST" action="loginAuthentication.php">
  <?php echo $msg ?>
  <div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
    <div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
</form>
</body>
</html>