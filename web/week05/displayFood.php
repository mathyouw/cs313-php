<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food You Can Eat</title>
    <link rel="stylesheet" type="text/css" href="03stylesheet.css">
    <script src="assign03javascript.js"></script>
      
</head>
<body>
   <div class="a">
   <h2>Food you can eat.</h2>
<?php
session_start();
?>
 <form method="post" action="Checkout.php">
   <?php
   $checkbox_id = $_POST['checkbox_id'];
   $camaro = $_POST['camaro'];
   $F150 = $_POST['F150'];
   $Lesabre = $_POST['Lesabre'];
   $RV = $_POST['RV'];
   $Fusion = $_POST['Fusion'];
   $Honda = $_POST['Honda'];
   foreach($_POST['checkbox_id'] as $check){
    echo "$check<br>";
   }
   echo "$checkbox_id<br>";
   echo "$camaro<br>";
   echo "$F150<br>";
   echo "$Lesabre<br>";
   echo "$RV<br>";
   echo "$Fusion<br>";
   echo "$Honda<br>";
   $_SESSION['camaro'] = $camaro;
   $_SESSION['F150'] = $F150;
   $_SESSION['Lesabre'] = $Lesabre;
   $_SESSION['RV'] = $RV;
   $_SESSION['Fusion'] = $Fusion;
   $_SESSION['Honda'] = $Honda;
?>
 <input type="submit" value="Proceed to Checkout">
</form>
<form method="post" action="assignment03.php">
<button onclick="goBack()">Return to Items List</button>
</form>
</div>
</body>
</html>