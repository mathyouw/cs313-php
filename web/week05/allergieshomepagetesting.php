  
<?php
require "dbConnect.php";
$db = get_db();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project 1</title>
    <link rel="stylesheet" type="text/css" href="03stylesheet.css">
</head>
<body class = "bg">
    <div align="right"><form action="AddIngred.php">
    <input type="submit" value="Managers Only" />
</form><br><br></div>
    <div align="center"; style="background-color: white; width: 600px;
  margin: auto; border: double;">
  <div class="a"><H1>Allergy Manager</H1>
    <h2>Please select the foods you are allergic to.</h2>
  </div>
<form method="post" action="displayFood.php">
        <table>
        <tr>
    <?php 
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        ?>
 <?php
        $statement = $db->prepare("SELECT ing_id, ing_name FROM ingredients");
$statement->execute();

// echo " <div class="grid-container">";

while (($row = $statement->fetch(PDO::FETCH_ASSOC)))
{
    // The variable "row" now holds the complete record for that
    // row, and we can access the different values based on their
    // name
    $book = $row['ing_name'];
    $chapter = $row['ing_id'];
    
    if ($chapter % 3 == 0) {echo '<tr>';}
        echo "<td><input type='checkbox' name='checkbox_id[]' value='" . $book . "'> </td>";
        echo "<td> $book </td> <td>  $chapter </td> ";
        
   

       
    // echo "<p><strong>$book $chapter $book[1] </strong></p>";
    // it worked until this line of code was added.
    // echo "<div class="grid-item">$book  <br><input type="checkbox">Add to List
    // <br></div>";
}
echo '</tr>';

?>

<?php
$rows = pg_copy_to($db, $ingredients);

foreach ($rows as $ro) {
    echo $rows[$ro];
    if ($rows % 3 == 0) {echo '<tr>'; }
    # code...
}

?>
    </tr>
    </table>

<div>
<input type="submit" value="Let us handle it!" >
<br>
</form>
<br>
</div>

</div>


    
</body>
</html>
