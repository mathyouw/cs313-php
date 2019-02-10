<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment05</title>
   
</head>
    <body>
    <?php
    echo '<p> hello world </p>';
    include '../dbconect.php';
    try {
        $db = getDBConnection();
    }
    catch(Exception $exception){
        echo $exception->getMessage();
    }


foreach ($db->query('SELECT SKU, ProductName, Description  FROM public.Product') as $row)
{
  echo 'SKU: ' . $row['SKU'];
  echo 'ProductName: ' . $row['ProductName'];
  echo 'Description: ' . $row['Description'];
  echo '<br/>';
}
  
    // $db->query("select * from db.voterdb.sql")
 
    ?>

    <!-- <form method="GET" action="scripture.php">
        <input type="text" name="book">

        <button type="submit">Submit</button>
    </form> -->

    </body>

</html>