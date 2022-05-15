<?php
include('config.php');
$ID=$_GET['id'];
$up = mysqli_query($con , "SELECT * FROM prod WHERE id = $ID");
$data = mysqli_fetch_array($up);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>confirm pay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        input {
            display: none;
        }
    </style>
</head>

<body>
    <center class='pt-5'>
        <div class="main ">
            <form action="insert_card.php" method="POST">
                <h2>pay prodact ?</h2>
                <input type="text" name="id" value='<?php echo $data['id'] ?>'>
                <input type="text" name="name" value='<?php echo $data['name'] ?>'>
                <input type="text" name="price" value='<?php echo $data['price'] ?>'>
                <button name='add' type='submit' class='btn btn-warning'>Add Confirm</button>
                <br>
                <a href="shop.php">back to prodacts</a>
            </form>
        </div>
    </center>
</body>

</html>