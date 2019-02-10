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


foreach ($db->query('SELECT username, password FROM note_user') as $row)
{
  echo 'user: ' . $row['username'];
  echo ' password: ' . $row['password'];
  echo '<br/>';
}
  
    // $db->query("select * from db.voterdb.sql")
 
    ?>
    <p>Hello world</p>
    <!-- <form method="GET" action="scripture.php">
        <input type="text" name="book">

        <button type="submit">Submit</button>
    </form> -->

    </body>

</html>