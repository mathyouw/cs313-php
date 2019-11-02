<?php
require "dbConnect.php";
$db = get_db();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Ingradients</title>
  
      
</head>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("https://fast-garden-06413.herokuapp.com/imagesHosted/taco-chefcartoon.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body>
   <h2>Please submit a recipe.</h2>
  <form method="post" action="AddIngred.php">
    <input type="text" name="recipetitle" placeholder="Recipe Title" required>
    <br>
    <input type="text" name="recipe" placeholder="Recipe Ingredients" required>
    <br>
    <input type="submit"  name="submit" value="submit">
  </form>
  <div class="a">
 
 
</div>
<?php

 echo "Before isset <br>";
    if(isset($_POST['submit'])){
      echo "line 46 isset <br>";
      $db = get_db();
      $recipetitle = htmlspecialchars($_POST['recipetitle']);
        $recipe = htmlspecialchars($_POST['recipe']);
      try{
        echo "line 56 isset <br>";
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
</body>
</html>