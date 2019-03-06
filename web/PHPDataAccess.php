<!DOCTYPE html>
<html lang="en">
<head>
<!--    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">-->
    <link rel="stylesheet" href="PHPDataAccessstylesheet.css">
    <meta charset="UTF-8">
    <title>Assignment05</title>
   
</head>
    <table class = content>
<div class = paper>
    <h1> Welcome <?php echo $_POST["name"]; ?><br></h1>

<!--    Your street address is: --><?php //echo $_POST["address"]; ?>

    <?php

    echo '<p> Please vote for your favorite item. </p>';?>


</div>

        <p>The box-shadow property can be used to create paper-like cards:</p>

        <div class="polaroid">
            <img src="Wallpaper-Paper-006.jpg" alt="Norway" style="width:100%">
            <div class="container">
                <p>Hardanger, Norway</p>
            </div>
        </div>
<?php
    include 'dbconect.php';
    try {
        $db = getDBConnection();
    }
    catch(Exception $exception){
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
        <div style="width: 100px; float:left; height:100px; background-image: url(Wallpaper-Paper-006.jpg); margin: 0 auto;">
            First DIV
        </div>
        <div style="width: 100px; float:left; height:100px; background:yellow; margin: 0 auto;">
            Second DIV
        </div>

        <div style="width: 100px; float:left; height:100px; background:gray; margin:10px; clear: left">
            First DIV
        </div>
        <div style="width: 100px; float:left; height:100px; background:yellow; margin:10px">
            Second DIV
        </div>
    <!-- <form method="GET" action="scripture.php">
        <input type="text" name="book">

        <button type="submit">Submit</button>
    </form> -->

    </body>

</html>