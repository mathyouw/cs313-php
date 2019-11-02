<!-- <?php
require "dbConnect.php";
$db = get_db();
?>
 -->
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

<!--   <?php
  $ingredient1 = $_POST['ingredient1'];
  $statement = $db->prepare("INSERT INTO ingredients (ing_id, ing_name)
  VALUES (100, tofu)");
  $statement->execute();

  echo << "$ingredient1"; 
  ?>  -->









 
</div>
</body>
</html>