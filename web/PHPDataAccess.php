<!DOCTYPE html>
<html lang="en">
<head>
<!--    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">-->
    <link rel="stylesheet" href="PHPDataAccessstylesheet.css">
    <meta charset="UTF-8">
    <title>Assignment05</title>
   
</head>
    <body class = content>
<div class = paper>
    <h1> Welcome <?php echo $_POST["name"]; ?><br></h1>

<!--    Your street address is: --><?php //echo $_POST["address"]; ?>
<!--    Array of images or numbers to pull from the db-->
    <?php
    $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg' ); // array of filenames

    $i = rand(0, count($bg)-1); // generate random number size of the array
    $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
    ?>
<!--    use this in the body -->

    <!--background: url(images/--><?php //echo $selectedBg; ?><!--) no-repeat;-->



    <?php

    echo '<p> Please vote for your favorite item. </p>';?>


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


            echo '<div style =" width: 75%; margin: 0 auto;">';
            echo "<div style='width: 200px; float:left; height:200px; background-image: url(Wallpaper-Paper-006.jpg); margin:10px'>";
//            First DIV
            echo 'SKU: ';
            echo "<br>";
            echo $row['sku'] ;
            echo '<br>';
            echo 'ProductName: ' . $row['product_name'];
            echo "<br>";
            echo 'Description: ';
            echo '<br>';
            echo $row['description'];
            echo '<br>';
            echo '</div>';
            echo "</div>";



        }

        // $db->query("select * from db.voterdb.sql")

        ?>

    <!-- <form method="GET" action="scripture.php">
        <input type="text" name="book">

        <button type="submit">Submit</button>
    </form> -->

    </body>

</html>