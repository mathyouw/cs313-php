<!DOCTYPE html>
<html lang="en">
<head>
<!--    using the pure stylesheet because I believe it looks nice and is free to use-->
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Assignment05</title>

</head>
    <body>




<?php
/**
 * Created by PhpStorm.
 * User: mathyouw
 * Date: 2/21/2019
 * Time: 8:12 PM
 */


?>
    <form class="pure-form pure-form-aligned" action="/PHPDataAccess.php" method="get">
        <fieldset>
            <div class="pure-control-group">
                <label for="name">Voter Name</label>
                <input id="name" type="text" placeholder="votername">
                <span class="pure-form-message-inline">This is a required field.</span>
            </div>

            <div class="pure-control-group">
                <label for="age">Age</label>
                <input id="age" type="number" placeholder="age">
            </div>

            <div class="pure-control-group">
                <label for="address">Street Address</label>
                <input id="address" type="text" placeholder=" 123 downtheroad">
            </div>


            <div class="pure-controls">


                <button type="submit" class="pure-button pure-button-primary">Submit</button>
            </div>
        </fieldset>
    </form>
<form action="PHPDataAccess.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>


    </body>

</html>