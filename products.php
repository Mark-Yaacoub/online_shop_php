<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online shop all prodacts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>
        <h3> Admain dashbord</h3>
        <a href="index.php">GO TO HOME</a> 
    </center>

    <?php
 include ('config.php');
 $result = mysqli_query ($con, "SELECT * FROM prod");
 while($row = mysqli_fetch_array($result)){
    echo "
    <center class='container'>
    <main class='float-end border'>
    <div class='card' style='width: 18rem;'>
        <img src='$row[image]' class='card-img-top' >
        <div class='card-body'>
            <h5 class='card-title'>$row[name]</h5>
            <p class='card-text'>$row[price]</p>
            <a href='delete.php? id=$row[id]' class='btn btn-danger'>Remove Prodact</a>
            <a href='update.php? id=$row[id]' class='btn btn-primary'>Edit Prodact</a>
        </div>
    </div>
    </main>
    </center>";
}

?>

</body>


</html>