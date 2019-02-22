<?php
// connect to the database
require "databaseConnect.php";
$db = get_db();
// gather user information
$username_1 = htmlspecialchars($_POST["username_1"]);
$password_1 = htmlspecialchars($_POST["password_1"]);
$password_2 = htmlspecialchars($_POST["password_2"]);
if (strcmp($password_1, $password_2) == 0) {
  $hashPassword = password_hash($password1, PASSWORD_DEFAULT);
  // insert user data into table and create their account
  $statement = $db->prepare("INSERT INTO teamusers (username, password)
    VALUES (:username, :password)");
  $statement->bindValue(":username", $username_1, PDO::PARAM_STR);
  $statement->bindValue(":password", $hashPassword, PDO::PARAM_STR);
  $statement->execute();
  $_SESSION["username"] = $username_1;
  header("Location: teamWelcome.php"); // log user in and redirect to user page
}
else {
  // if passwords don't match bounce them back to registration
  session_start();
  $_SESSION["msg"] = "Passwords do not match";
  header("Location: teamRegistration.php");
  //echo 'Passwords do not match';
}
?>