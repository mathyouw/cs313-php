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
   $camaro = $_SESSION['camaro'];
   $F150 = $_SESSION['F150']; 
   $Lesabre = $_SESSION['Lesabre'];
   $RV = $_SESSION['RV'];
   $Fusion = $_SESSION['Fusion'];
   $Honda = $_SESSION['Honda'];
   // $camaro = $_POST['camaro'];
   // $F150 = $_POST['F150'];
   // $Lesabre = $_POST['Lesabre'];
   // $RV = $_POST['RV'];
   // $Fusion = $_POST['Fusion'];
   // $Honda = $_POST['Honda'];
   echo "$camaro<br>";
   echo "$F150<br>";
   echo "$Lesabre<br>";
   echo "$RV<br>";
   echo "$Fusion<br>";
   echo "$Honda<br>";

?>
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

</body>
</html>