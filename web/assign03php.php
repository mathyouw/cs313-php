
/**
 * Created by PhpStorm.
 * User: mathyouw
 * Date: 1/26/2019
 * Time: 12:52 PM
 */
<!DOCTYPE html>


<html lang="en">
<head>
   
</head>
<body>
<?php
$username = $_POST['name'];
$email = $_POST['email'];
$streetAddress = $_POST['streetAddress'];
$City = $_POST['City'];
$State = $_POST['State'];
$zipcode = $_POST{'zipcode'};



echo "$username<br>";
echo "$email<br>";
echo "$streetAddress<br>";
echo "$City<br>";
echo "$State<br>";
echo "$zipcode";

?>

</body>
</html>
