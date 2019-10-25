  
<?php
require "dbConnect.php";
$db = get_db();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment05</title>
    <link rel="stylesheet" type="text/css" href="03stylesheet.css">
</head>
<body>
    <?php 
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        ?>
 <?php
        $statement = $db->prepare("SELECT ing_id, ing_name FROM ingredients");
$statement->execute();

echo " <div class="grid-container">";

while (($row = $statement->fetch(PDO::FETCH_ASSOC)))
{
    // The variable "row" now holds the complete record for that
    // row, and we can access the different values based on their
    // name
    $book = $row['ing_name'];
    $chapter = $row['ing_id'];

    echo "<p><strong>$book $chapter</strong></p>";
    // it worked until this line of code was added.
    echo "<div class="grid-item">$statement[1]  <br><input type="checkbox">Add to List
    <br></div>";
}
echo "</div>";

?>
<!-- 
    <button onclick="window.location.href = 'Checkout.php';">Click Here</button> -->
    <form method="post" action="displayFood.php">
    <div class="a"><H2>Allergy Manager</H2><br></div>
    <input type="submit" value="Let us handle it!" >
   
    <div class="a"><p>Please select ingredients that you are allergic to.</p></div>
    <div class="grid-container">
        <div class="grid-item">beef  <br><input type="checkbox" name="camaro" value="1989 Camaro">Add to List
    <br></div>

        <div class="grid-item">chicken  <br><input type="checkbox" name="F150" value="1989 Ford F-150">Add to List</div>

        <div class="grid-item">flour  <br><input type="checkbox" name="Lesabre" value="2004 Buick Lesabre Custom">Add to List</div>
<!--     </div>
       <div class="a"><br><p>Speciality Items Available </p></div>
    <div class="grid-container"> -->
        <div class="grid-item">cheese <br><input type="checkbox" name="RV" value="1973 Ford RV">Add to List</div>
        <div class="grid-item">rice <br><input type="checkbox" name="Fusion" value="2015 Ford Fusion">Add to List</div>
        <div class="grid-item">tomato <br><input type="checkbox" name="Honda" value="1985 Honda 3 Wheeler">Add to List</div>
    </div>
</form>
    
</body>
</html>
