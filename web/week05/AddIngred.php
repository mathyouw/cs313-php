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

      
</head>

<body background="food_pics\taco-chefcartoon.jpg">
  <div align="center"; style="background-color:#0CAF9C; width: 500px;
  margin: auto; border: double;">
   <h2 style="color:#000000">Please submit a recipe.</h2>
  <form method="post" action="AddIngred.php">
    <input type="text" name="recipetitle" placeholder="Recipe Title" required>
    <br>
    <input type="text" name="recipe" placeholder="Recipe Ingredients" required>
    <br>
    <input type="submit"  name="submit" value="submit">
  </form>

<?php


    if(isset($_POST['submit'])){
    
      $db = get_db();
      $recipetitle = htmlspecialchars($_POST['recipetitle']);
        $recipe = htmlspecialchars($_POST['recipe']);
      try{
      
        $result = $db->prepare("INSERT INTO intake_recipes (recipe_suggestion_name , recipe_ingredients) 
                             VALUES( :newid, :user)");
        $result->bindParam('newid', $recipetitle);
        $result->bindParam('user', $recipe);
        echo "Recipe submitted: <br>";
        echo $recipetitle."<br>";
        echo $recipe."<br>";
        echo "Please submit another recipe.<br>";
        $result->execute();
        $rows = $result->fetch(PDO::FETCH_ASSOC);
      }
      catch (Exception $e) {
        echo "Could not upload recipe". $e->getMessage();
        exit();
      }
    }
    ?>
     </div>
</body>
</html>