<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment05</title>
    <link rel="stylesheet" type="text/css" href="03stylesheet.css">
</head>
<body>
    <?php 
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        ?>
<!-- 
    <button onclick="window.location.href = 'Checkout.php';">Click Here</button> -->
    <form method="post" action="displayFood.php">
    <div class="a"><H2>Wilson's Used Car Lot</H2><br></div>
    <input type="submit" value="Let us handle it!" >
   
    <div class="a"><p>Ingredients that you are allergic to.</p></div>
    <div class="grid-container">
        <div class="grid-item">beef  <br><img src="carpicks/DSCN0638.JPG"><br><input type="checkbox" name="camaro" value="1989 Camaro">Add to Cart
    <br></div>

        <div class="grid-item">chicken  <br><img src="carpicks/20160528_182453.jpg"><br><input type="checkbox" name="F150" value="1989 Ford F-150">Add to Cart</div>

        <div class="grid-item">flour  <br><img src="carpicks/20180329_102604.jpg"><br><input type="checkbox" name="Lesabre" value="2004 Buick Lesabre Custom">Add to Cart</div>
    </div>
       <div class="a"><br><p>Speciality Items Available </p></div>
    <div class="grid-container">
        <div class="grid-item">cheese <br><img src="carpicks/20170920_122606.jpg"><br><input type="checkbox" name="RV" value="1973 Ford RV">Add to Cart</div>
        <div class="grid-item">rice <br><img src="carpicks/DSCN0471.JPG"><br><input type="checkbox" name="Fusion" value="2015 Ford Fusion">Add to Cart</div>
        <div class="grid-item">tomato <br><img src="carpicks/left.jpg"><br><input type="checkbox" name="Honda" value="1985 Honda 3 Wheeler">Add to Cart</div>
    </div>
</form>
    
</body>
</html>
