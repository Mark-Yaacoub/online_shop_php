<?php
include ('config.php');


if(isset ($_POST['updata'])){
    $ID = $_POST['id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name =$_FILES['image']['name'];
    $image_up ="img/".$image_name;
    $updata = "UPDATE prod SET name='$NAME' , price='$PRICE' , image='$image_up' WHERE id=$ID ";
    mysqli_query($con, $updata);
    
    if(move_uploaded_file($image_location, 'img/'.$image_name)){
        echo "<script>alert ('image uploaded')</script>";

    }else {
        echo "<script>alert ('image not uploaded')</script>";
    }
    header('location: products.php');
}

?>