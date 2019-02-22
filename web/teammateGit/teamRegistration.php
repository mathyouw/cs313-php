<?php
session_start();
require "databaseConnect.php";
$db = get_db();
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
  	<div class="active"><li><a href="teamRegistration.php">Sign-Up</a></li></div>
  	<div class="tooltip"><li><a href="teamSignin.php">Sign-In</a></li></div>
  </ul>
</div><hr>
<!-- Page Starts Here -->
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="teamSignup.php">
  <p><font color="red">
  <?php
  if (isset($_SESSION["msg"])) {
  echo $_SESSION["msg"];
  }
  ?></font></p>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username_1">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="teamSignin.php">Sign in</a>
	</p>
</form>
</body>
</html>