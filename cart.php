<?php

include 'Connection.php';
if(isset($_POST['update_update_btn'])){
    $update_value = $_POST['update_quantity'];
    $update_id = $_POST['update_quantity_id'];
    $update_quantity_query = mysqli_query($con, "UPDATE cart SET quantity='$update_value'
    WHERE id = '$update_id'");
    if($update_quantity_query){
        header('location:cart.php');
    } 
}

if(isset($_GET['remove'])){
    $remove_id = $_GET['remove'];
    mysqli_query($con, "DELETE FROM cart WHERE id = '$remove_id'");
    header('location:cart.php');
}

if(isset($_GET['delete_all'])){
    mysqli_query($con, "DELETE FROM cart");
    header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'homeheader.php';?>

<div class="container">
    <section class="shopping-cart">
        <h1 class="heading">Shopping Cart</h1>
        <table>
            <thead>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Action</th>
            </thead>

            <tbody>
                <?php

                $select_cart = mysqli_query($con, "SELECT * FROM cart");
                $grand_total = 0;
                if(mysqli_num_rows($select_cart) > 0){
                    while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                ?>

                <tr class="table-bottom">
                    <td><img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100 " alt=""></td>
                    <td><?php echo $fetch_cart['name']; ?></td>
                    <td><?php echo number_format($fetch_cart['price']); ?></td>
                    <td>
                        <form action="" method="post">  
                            <input type="hidden" name="update_quantity_id" value="<?php echo
                            $fetch_cart['id']; ?>" >
                            <input type="number" name="update_quantity" min="3" value="<?php echo
                            $fetch_cart['quantity']; ?>" >
                            <input type="submit" value="update" name="update_update_btn">
                        </form>
                     </td>
                    <td><?php echo $sub_total = $fetch_cart['price']  * $fetch_cart
                    ['quantity']; ?></td>
                    <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return
                    confirm('remove item from cart?')" class="delete_btn"><i class="fas fa-trash"></i>
                    remove</a></td>
                </tr>
                <?php
                  $grand_total += $sub_total;
                    }
                }
                ?>
                <tr>
                    <td><a href="product.php" class="option-btn" style="margin-top: 0;">Continue
                    shopping</a></td>
                    <td colspan="3">Grand total</td>
                    <td><?php echo $grand_total; ?></td>
                    <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" 
                    class="delete-btn"><i class="fas fa-trash"></i>delete all</a></td>
                </tr>
            </tbody>
        </table>

        
        <div class="checkout-btn">
            <a href="Rent1.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">Proceed to 
            rent</a>
        </div>
        

    </section>

</div>
    
</body>
<footerr> <?php include 'footerr.html';?> </footerr>
</html>