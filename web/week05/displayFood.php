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
   foreach($_POST['checkbox_id'] as $check){
    echo "$check<br>";
   }
  
?>
 <input type="submit" value="Proceed to Checkout">
</form>
<form method="post" action="assignment03.php">
<button onclick="goBack()">Return to Allergy List</button>
</form>
</div>
</body>
</html>