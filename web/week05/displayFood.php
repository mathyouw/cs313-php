<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food You Can Eat</title>
    <link rel="stylesheet" type="text/css" href="03stylesheet.css">
    <script src="assign03javascript.js"></script>
      
</head>
<body class = "bg2">
<?php>
$pancake = array("milk", "vinegar", "flour", "sugar", "baking powder", "baking soda", "salt", "egg", "butter");
$lasagna = array("sausage", "ground beef", "onion","garlic","tomatoes
","white sugar","basil leaves","fennel seeds","Italian seasoning salt
","black pepper","parsley ","lasagna noodles","ricotta cheese","egg
","mozzarella cheese","Parmesan cheese");
$soup = array("Potatoes","celery","onion","Ham","white pepper","black pepper","butter
","milk");




?>
<div >
   <div class="b">
    <h2>We a still a small company so we only offer 3 dishes.</h2>
   <h2>These are the dishes you can eat.</h2>
<?php
session_start();
?>
 <form method="post" action="Checkout.php">
   <?php
   $visiblepancake = true;
   $visiblelasagna = true;
   $visiblesoup = true;

   $checkbox_id = $_POST['checkbox_id'];
   foreach($_POST['checkbox_id'] as $check){
    if (in_array($check, $pancake)) {
    $visiblepancake = false;
    }
    if (in_array($check, $lasagna)) {
    $visiblelasagna = false;
    }
    if (in_array($check, $soup)) {
    $visiblesoup = false;

    }

   }
  

   if ($visiblepancake == true){
     echo '<div > <img src="https://fast-garden-06413.herokuapp.com/imagesHosted/fluffy-pancakes.png" alt="pancake" style ="border-style: outset;"> <h2> Fluffy Pancakes</h2> </div>';
   }
   if ($visiblelasagna == true){
     echo '<div> <img src="https://fast-garden-06413.herokuapp.com/imagesHosted/best-lasagna.jpg" alt="lasagna" style ="border-style: outset;"> <h2>Worlds Best Lasagna</h2> </div>';
   }
   if ($visiblesoup == true){
     echo '<div> <img src="https://fast-garden-06413.herokuapp.com/imagesHosted/ham-potato-soup.jpg" style ="border-style: outset;"> <h2>Ham and Potato Soup</h2> </div>';
   }
    
  
?>
</form>
<form method="post" action="allergieshomepagetesting.php">
<button onclick="goBack()">Return to Allergy List</button>
</form>
</div>
</div>
</body>
</html>