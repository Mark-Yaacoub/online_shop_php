<?php
include ('config.php');



$validName = "";
$validPrice = "";

if(isset ($_POST['upload'])){
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name =$_FILES['image']['name'];
    $image_up ="img/".$image_name;

    if(empty ($NAME) || empty($PRICE)) {
        if (empty ($NAME)){
            $validName = "Name is REquerd";
        }
        if(empty ($PRICE)){
            $validPrice = "price is REquerd";

        }
    }else {
        $insert = "INSERT INTO prod  (name , price, image) VALUES ('$NAME' , '$PRICE' , '$image_up')";
        mysqli_query($con, $insert);
    }

    header('location: index.php');
}

?>