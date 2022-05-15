<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online shop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
include ('insert.php');
?>
    <center>
        <div class="main">
            <form action="insert.php" method="POST"  enctype="multipart/form-data">
                <h2>Online Shop🥼</h2>
                <img src="img/logo.png" alt="logo" width="450px">
                
                <input type="text" name="name" placeholder="Prodact Name" >
                <br>
                
                <input type="text" name="price" placeholder="Prodact price">
                <br>
                <input type="file" id="file" name="image">
                <br>
                <!-- <label for="file">Choose a product image</label> -->
               
                <button name="upload">Add Prodact</button>
                <br>
                <a href="products.php">Show All prodatcs</a>
                <br>
                <a href="shop.php">shop</a>

            </form>
        </div>
        <p>Developer By Marko Malak</p>
    </center>
</body>
</html>

