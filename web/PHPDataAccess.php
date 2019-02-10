<html>
    <head>

    </head>
    <body>
    <?php
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