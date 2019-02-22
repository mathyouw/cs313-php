<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment05</title>
   
</head>
    <body>

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

    <form class="pure-form pure-form-aligned">
        <fieldset>
            <div class="pure-control-group">
                <label for="name">Username</label>
                <input id="name" type="text" placeholder="Username">
                <span class="pure-form-message-inline">This is a required field.</span>
            </div>

            <div class="pure-control-group">
                <label for="password">Password</label>
                <input id="password" type="password" placeholder="Password">
            </div>

            <div class="pure-control-group">
                <label for="email">Email Address</label>
                <input id="email" type="email" placeholder="Email Address">
            </div>

            <div class="pure-control-group">
                <label for="foo">Supercalifragilistic Label</label>
                <input id="foo" type="text" placeholder="Enter something here...">
            </div>

            <div class="pure-controls">
                <label for="cb" class="pure-checkbox">
                    <input id="cb" type="checkbox"> I've read the terms and conditions
                </label>

                <button type="submit" class="pure-button pure-button-primary">Submit</button>
            </div>
        </fieldset>
    </form>
    <!-- <form method="GET" action="scripture.php">
        <input type="text" name="book">

        <button type="submit">Submit</button>
    </form> -->

    </body>

</html>