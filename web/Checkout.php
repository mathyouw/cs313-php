<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
</head>
<body>
<?php
session_start();
?>
   <?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["Camaro"] . ".<br>";
echo "Favorite animal is " . $_SESSION["Buick"] . ".";
?>
<form method="post" action="assign03php.php">
    <input type="text" name="name" placeholder="Name">
    <br>
    <input type="text" name="email" placeholder="Email">
    <br>
    <input type="text" name="streetAddress" placeholder="Street Address">
    <br>
    <input type="text" name="City" placeholder="City">
    <br>
    <input type="text" name="State" placeholder="State">
    <br>
    <input type="text" name="zipcode" placeholder="Zip Code">
    <br>
    <input type="submit" value="Submit">
</form>

</body>
</html>