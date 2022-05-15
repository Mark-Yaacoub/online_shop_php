<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update prodacts</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
     include ('config.php');
     $ID=$_GET ['id'];
     $up = mysqli_query($con, "select * from prod where id =$ID");
     $data = mysqli_fetch_array($up);

    ?>
    <center>
        <div class="main">
            <form action="up.php" method="POST"  enctype="multipart/form-data">
                <h2>update Prodact</h2>
                <input type="text" name="id" readonly value='<?php echo $data['id'] ?>'>
                <br>
                <input type="text" name="name" value='<?php echo $data['name']?>'>
                <br>
                <input type="text" name="price" value='<?php echo $data['price']?>'>
                <br>
                <input type="file" id="file" name="image" >
                <br>
                <button name="updata" type="submit">updata prodact</button>
                <br>
                <a href="products.php">show all prodatcs</a>

            </form>
        </div>
        <p>Developer By Marko Malak</p>
    </center>
</body>
</html>

