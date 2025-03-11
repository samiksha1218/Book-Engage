<?php
include "adminConnection.php";

if(isset($_POST['add_product'])){
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_author = $_POST['p_author'];
    $p_image = $_FILES['p_image']['name'];
    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $p_image_folder = 'uploaded_img/'.$p_image;

    $insert_query = mysqli_query($con,"INSERT INTO products(name, price, author, image) VALUES('$p_name','$p_price','$p_author','$p_image')") or die('query failed');

    if($insert_query){
        move_uploaded_file($p_image_tmp_name, $p_image_folder);
       // $message[] = 'Product added succesfully';
       echo 'Product added succesfully';
    }else{
        echo 'could not add the product'; 
    }
};

?>