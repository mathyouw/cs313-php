<?php
    session_start();
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
   <h2>Please submit a recipe.</h2>
  <form method="post" action="AddIngred.php">
    <input type="text" name="recipetitle" placeholder="Recipe Title" required>
    <br>
    <input type="text" name="recipe" placeholder="Recipe Ingredients" required>
    <br>
    <input type="submit" value="Submit">
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
        $result = $db->prepare("INSERT INTO users (PersonID, Username, Password, FirstName, LastName) 
                             VALUES( :newid, :user, :pass, :fname, :lname)");
        $result->bindParam('newid', $recipetitle);
        $result->bindParam('fname', $recipe);
        echo "line 76 try <br>";
        echo $recipetitle."<br>";
        echo $recipe."<br>";
        $result->execute();
        $rows = $result->fetch(PDO::FETCH_ASSOC);
      }
      catch (Exception $e) {
        echo "Could not create new user". $e->getMessage();
        exit();
      }
    }
</body>
</html>