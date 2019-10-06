<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="03stylesheet.css">
    <script src="assign03javascript.js"></script>
</head>
<body>
<?php
session_start();
?>
 <div class="a">
   <?php


   $camaro = $_SESSION['camaro'];
   $F150 = $_SESSION['F150']; 
   $Lesabre = $_SESSION['Lesabre'];
   $RV = $_SESSION['RV'];
   $Fusion = $_SESSION['Fusion'];
   $Honda = $_SESSION['Honda'];

   $_SESSION['camaro'] = $camaro;
   $_SESSION['F150'] = $F150;
   $_SESSION['Lesabre'] = $Lesabre;
   $_SESSION['RV'] = $RV;
   $_SESSION['Fusion'] = $Fusion;
   $_SESSION['Honda'] = $Honda;

   // $camaro = $_POST['camaro'];
   // $F150 = $_POST['F150'];
   // $Lesabre = $_POST['Lesabre'];
   // $RV = $_POST['RV'];
   // $Fusion = $_POST['Fusion'];
   // $Honda = $_POST['Honda'];
   // echo "$camaro<br>";
   // echo "$F150<br>";
   // echo "$Lesabre<br>";
   // echo "$RV<br>";
   // echo "$Fusion<br>";
   // echo "$Honda<br>";

?>
<h2>Please provide a shipping address.</h2>
<form method="post" action="assign03php.php">
    <input type="text" name="name" placeholder="Name">
    <br>
    <input type="number" name="quantity" placeholder="number">
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
<form method="post" action="cart.php">
<input type="submit" value="Return to Cart">
</form>
</div>
</body>
</html>