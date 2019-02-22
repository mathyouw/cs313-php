<?php
// connect to the database
require "databaseConnect.php";
$db = get_db();
$username = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);
// access database
$statement = $db->prepare("SELECT password FROM teamusers WHERE username='$username'");
$statement->execute();
// retrieve results for username match in the database
$row = $statement->fetch(PDO::FETCH_ASSOC);
$userPassword = $row['password'];
$hashPassword = password_hash($userPassword, PASSWORD_DEFAULT);
// check if password is correct
if (password_verify($userPassword, $hashPassword)) {
    session_start();
    $_SESSION["username"] = $username;
    header("Location: teamWelcome.php"); // redirect to user page
}
else {
  // bounce back to login if password is wrong
  header("Location: teamSignin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Team Sign-In</title>
  <link href="main.css" rel="stylesheet" type="text/css">
</head>
<body>
  <p></p>
</body>
</html>