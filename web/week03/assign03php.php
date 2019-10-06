
<!DOCTYPE html>


<html lang="en">
<head>
   <link rel="stylesheet" type="text/css" href="03stylesheet.css">
</head>
<body>
	<?php
session_start();
?>
 <div class="a">
<?php
$username = $_POST['name'];
$email = $_POST['email'];
$streetAddress = $_POST['streetAddress'];
$City = $_POST['City'];
$State = $_POST['State'];
$zipcode = $_POST{'zipcode'};

$camaro = $_SESSION['camaro'];
$F150 = $_SESSION['F150']; 
$Lesabre = $_SESSION['Lesabre'];
$RV = $_SESSION['RV'];
$Fusion = $_SESSION['Fusion'];
$Honda = $_SESSION['Honda'];
?>

<h2>Your Address<br></h2>
	<?php
echo "$username<br>";
echo "$email<br>";
echo "$streetAddress<br>";
$str1="$City, ";
$str2="$State, ";
echo $str1 . " " . $str2;

echo "$zipcode<br>";
?>
<h2>Your Order<br></h2>
<?php
echo "$camaro<br>";
   echo "$F150<br>";
   echo "$Lesabre<br>";
   echo "$RV<br>";
   echo "$Fusion<br>";
   echo "$Honda<br>";

?>
</div>
</body>
</html>
