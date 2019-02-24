<!DOCTYPE html>
<html lang="en">
<head>
<!--    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">-->
    <link rel="stylesheet" href="PHPDataAccessstylesheet.css">
    <meta charset="UTF-8">
    <title>Assignment05</title>
   
</head>
    <body>

    Welcome <?php echo $_POST["name"]; ?><br>
<!--    Your street address is: --><?php //echo $_POST["address"]; ?>

    <?php

    echo '<p> hello world </p>';



    include 'dbconect.php';
    try {
//        echo "no error1";
        $db = getDBConnection();
//        echo "no error2";
    }
    catch(Exception $exception){
        echo "here error";
        echo $exception->getMessage();
    }

//    echo "before foreeach";
    foreach ($db->query('SELECT * FROM public.product') as $row)
    {
        echo "in foreach";
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