<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
  
    <header class="header">
   <div class="flex">
     <img src="Logo.jpg" alt="" width="60px" height="65px">
        <a href="#" class="logo">Book engage</a>
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="Orderlist.php">Order</a>
            <a href="registerlist.php">User</a>
            <a href="adminproduct.php">Product</a>
            <a href="./adminlogin.php">Logout</a>
        </nav>
    </div>
</header>

<section class="edit-form-container">
    <?php
    
         include "adminConnection.php"; 
          if(isset($_GET['edit']));
             $edit_id = $_GET['edit'];
             $edit_query = mysqli_query($con, "SELECT * FROM products WHERE id = $edit_id");
             if(mysqli_num_rows($edit_query) > 0){
                while($fetch_edit = mysqli_fetch_assoc($edit_query)){ 
    ?>
      <form action="update_product.php" method="post" enctype="multpart/form-data">
           <img src="uploaded_img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
           <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
           <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit
           ['name']; ?>">
           <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo
           $fetch_edit['price']; ?>">
           <input type="file" class="box" name="update_p_image" accept="image/png, image/jpg, 
           image/jpeg">
           <input type="submit" value="update the product" name="update_product" class="btn">
           <input type="reset" value="cancel" id="close-edit" class="option-btn">
       </form>

       <?php

    }
}
         

    ?>
</section>

