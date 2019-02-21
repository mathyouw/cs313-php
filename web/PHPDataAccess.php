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
        echo "no error";
    }
    catch(Exception $exception){
        echo "here error";
        echo $exception->getMessage();
    }


    foreach ($db->query('SELECT * FROM public.product') as $row)
    {
      echo 'SKU: ' . $row['sku'];
      echo 'ProductName: ' . $row['product_name'];
      echo 'Description: ' . $row['description'];
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