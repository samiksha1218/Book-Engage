<?php
$con = new mysqli('localhost', 'root', '@iksha012', 'book_engage');
if($con->connect_error) {
    die($con->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="admin.css">
  
</head>
<body>
<header class="header">
    <div class="flex">
      <img src="Logo.jpg" alt="" width="60px" height="65px">
        <a href="#" class="logo">Book engage</a>
        <nav class="navbar">
            <a href="admin2ndpage.php">Home</a>
            <a href="Orderlist.php">Order</a>
            <a href="registerlist.php">Register</a>
            <a href="adminproduct.php">Product</a>
            <a href="./adminlogin.php">Logout</a>
        </nav>
    </div>
</header>

<div class="container">

    <section>
        <form action="admin_insert.php" method="post" class="add-product-form" enctype="multipart/form-data">
             <h3>add a new product</h3>
             <input type="text" name="p_name" placeholder="Enter the product name" class="box" required>
             <input type="number" name="p_price" placeholder="Enter the product price" class="box" required>
             <input type="text" name="p_author" placeholder="Enter the product author" class="box" required>
             <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
             <input type="submit" value="add  product" name="add_product" class="btn">
        </form>

    </section>

<section class="display-product-table">
    <table>
        <thead>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Author</th>
            <th>Product Price</th>
            <th>action</th>
        </thead>

        <tbody>
            <?php
               $select_product = mysqli_query($con, "SELECT * FROM products");
               if(mysqli_num_rows($select_product) > 0){
                  while($row = mysqli_fetch_assoc($select_product)){
             ?>

             <tr>
                <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['author']; ?></td>
                <td><?php echo $row['price']; ?>/-</td>
                <td>
                    <a href="delete_product.php?delete=<?php echo $row['id']; ?>" class="delete-btn"
                    onclick="return confirm('are you sure you want to delete this?');">
                    <i class="fas fa-trash"></i>delete</a>
                    <a href="edit_product.php?edit=<?php echo $row['id']; ?>" class="option-btn">
                    <i class="fas fa-edit"></i>update</a>
                </td>
             </tr>

            <?php
                }
                }else{
                    echo "<div class='empty'>No product added</div>";
                }
            ?>


        </tbody>
    </table>

</section>


</div>
 </body>
 </html>