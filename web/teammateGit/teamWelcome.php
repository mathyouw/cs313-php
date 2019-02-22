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
  	<div class ="active"><li><a href="teamWelcome.php">Home</a></li></div>
  	<div class="tooltip"><li><a href="teamRegistration.php">Sign-Up</a></li></div>
  	<div class="tooltip"><li><a href="teamSignin.php">Sign-In</a></li></div>
  </ul>
</div><hr>
<p>
<!-- Page Starts Here -->
<?php
  echo 'TURN BACK BEFORE IT\'S TOO LATE ' . $_SESSION['username'];
?>
</body>
</html>