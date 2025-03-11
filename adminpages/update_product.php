<?php
include_once('adminConnection.php');
// if(isset($_GET['update'])){
    $update_id =$_POST['update_p_id'];
    $name = $_POST['update_p_name'];
    $price = $_POST['update_p_price'];
    $update_query = mysqli_query($con, "UPDATE products SET name='$name', price='$price' where id ='$update_id'");
    if($update_query){
    //    echo 'product has been deleted';
    header("location:adminproduct.php");
    }else{
        echo 'product could not be deleted';
    }
// }

?>