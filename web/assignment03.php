<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment03</title>
    <link rel="stylesheet" type="text/css" href="03stylesheet.css">
</head>
<body>
    <?php 
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        ?>

    <button onclick="window.location.href = 'Checkout.php';">Click Here</button>
    <div class="a"><H2>Wilson's Used Car Lot</H2><br></div>
    <div class="a"><p>Vehicles Available</p></div>
    <div class="grid-container">
        <div class="grid-item">1989 Camaro  <br><img src="carpicks/DSCN0638.JPG"><button onClick="$_SESSION['Camaro']= '1989 Camaro'">Add to Cart</button></div>
        <div class="grid-item">1989 Ford F-150  <br><img src="carpicks/20160528_182453.jpg"><button onClick="$_SESSION['F-150']='1989 Ford F-150'">Add to Cart</button></div>
        <div class="grid-item">2004 Buick Lesabre Custom  <br><img src="carpicks/20180329_102604.jpg"><button onClick="$_SESSION['Buick'] = '2004 Buick Lesabre Custom'">Add to Cart</button></div>
    </div>
       <div class="a"><br><p>Speciality Items Available</p></div>
    <div class="grid-container">
        <div class="grid-item">1973 Ford RV <br><img src="carpicks/20170920_122606.jpg"><button onClick="$_SESSION['RV'] = '1973 Ford RV')">Add to Cart</button></div>
        <div class="grid-item">2015 Ford Fusion <br><img src="carpicks/DSCN0471.JPG"><button onClick="$_SESSION['Fusion' = '2015 Ford Fusion']">Add to Cart</button></div>
        <div class="grid-item">1985 Honda 3 Wheeler <br><img src="carpicks/left.jpg"><button onClick="$_SESSION['Honda'] = '1985 Honda 3 Wheeler'">Add to Cart</button></div>
    </div>

    
</body>
</html>