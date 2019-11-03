<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food You Can Eat</title>
    <link rel="stylesheet" type="text/css" href="03stylesheet.css">
    <script src="assign03javascript.js"></script>
      
</head>
<body>
<?php>
$pancake = array("milk", "vinegar", "flour", "sugar", "baking powder", "baking soda", "salt", "egg", "butter");
$lasagna = array("sausage", "ground beef", "onion","garlic","tomatoes
","white sugar","basil leaves","fennel seeds","Italian seasoning salt
","black pepper","parsley ","lasagna noodles","ricotta cheese","egg
","mozzarella cheese","Parmesan cheese");
$soup = array("Potatoes","celery","onion","Ham","white pepper","black pepper","butter
","milk");




?>

   <div class="a">
   <h2>Foods you can't eat.</h2>
   <h1>We're Sorry This portion is still in development.</h1>
<?php
session_start();
?>
 <form method="post" action="Checkout.php">
   <?php
   $checkbox_id = $_POST['checkbox_id'];
   foreach($_POST['checkbox_id'] as $check){
    echo "$check<br>";
    if (in_array($check, $pancake)) {
    echo "Got No pancake";
    }
   }
  
?>
</form>
<form method="post" action="allergieshomepagetesting.php">
<button onclick="goBack()">Return to Allergy List</button>
</form>
</div>
</body>
</html>