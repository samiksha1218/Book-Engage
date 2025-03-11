<?php
include 'Connection.php';

if(isset($_POST['add_to_cart'])){

    $name =  $_POST['name'];
    $author = $_POST['author'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $quantity = 1;
    $select_cart =mysqli_query($con, "SELECT * FROM cart WHERE name = '$name'");

    if(mysqli_num_rows($select_cart) > 0){
       echo  'Product add to cart Succesfully';
    }else{
        $insert_product = mysqli_query($con, "INSERT INTO cart(name, price, image, quantity, author) VALUES
        ('$name','$price','$image','$quantity','$author')");
        echo 'Product add to cart Succesfully';
    }

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'homeheader.php'; ?>


<div class="container">
    <section class="product">
        <h1 class="heading">Latest Products</h1>
        <div class="box-container">
            <?php
            $select_product =mysqli_query($con,"SELECT * FROM products");
            if(mysqli_num_rows($select_product) > 0){
                while($fetch_product = mysqli_fetch_assoc($select_product)){
            ?>

            <form action="#" method="post">
               <div>
                   <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" height="250" alt="">
                   <h3><?php echo $fetch_product['name']; ?></h3>
                   <div class="author"><?php echo $fetch_product['author']; ?></div>
                   <div class="price"><?php echo $fetch_product['price']; ?></div>
                   <input type="hidden" name="name" value="<?php echo $fetch_product['name']; 
                   ?>">
                   <input type="hidden" name="price" value="<?php echo $fetch_product['price']; 
                   ?>">
                   <input type="hidden" name="image" value="<?php echo $fetch_product['image']; 
                   ?>">
                    <input type="hidden" name="author" value="<?php echo $fetch_product['author']; 
                   ?>">
                   <input type="submit" class="btn" value="add to cart" name="add_to_cart">
               </div>
            </form>
            <?php
                }
            }
             ?>
        </div>
    </section>
</div>


</body>
<footerr> <?php include 'footerr.html';?> </footerr>
</html>