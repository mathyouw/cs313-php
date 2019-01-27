<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
</head>
<body>
<?php
session_start();
?>
 <form method="post" action="cart.php">
   <?php
   $camaro = $_POST['camaro'];
   $F150 = $_POST['F150'];
   $Lesabre = $_POST['Lesabre'];
   $RV = $_POST['RV'];
   $Fusion = $_POST['Fusion'];
   $Honda = $_POST['Honda'];
   echo "$camaro<br>";
   echo "$F150<br>";
   echo "$Lesabre<br>";
   echo "$RV<br>";
   echo "$Fusion<br>";
   echo "$Honda<br>";

?>
 <input type="submit" value="Proceed to Checkout">
</form>


</body>
</html>