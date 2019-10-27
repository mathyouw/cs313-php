<?php
require "dbConnect.php";
$db = get_db();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Ingradients</title>
    <link rel="stylesheet" type="text/css" href="03stylesheet.css">
    <script src="assign03javascript.js"></script>
      
</head>
<body>
  <form method="post" action="AddIngred.php">
    <input type="text" name="Ingredient1" placeholder="Ingredient1">
    <br>
    <input type="text" name="email" placeholder="Email">
    <br>
    <input type="submit" value="Submit">
</form>
  <div class="a">
  <h2>Add Ingradients</h2>

  <?php
  $ingredient1 = $_POST['ingredient1'];
  $statement = $db->prepare("INSERT INTO ingredients (ing_id, ing_name)
  VALUES (100, " + ingredient1 +")");
  $statement->execute();

  echo << ingredient1; 
  ?> 









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