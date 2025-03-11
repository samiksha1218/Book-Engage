<?php
include_once('./adminConnection.php');
if(isset($_GET['delete'])){
    $delete_id =$_GET['delete'];
    $delete_query = mysqli_query($con, "DELETE FROM products where id =$delete_id");
    if($delete_query){
    //    echo 'product has been deleted';
    header("location:adminproduct.php");
    }else{
        echo 'product could not be deleted';
    }
}

?>