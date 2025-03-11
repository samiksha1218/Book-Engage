<?php
session_start();
 $username= $_SESSION['username'];
 $email= $_SESSION['email'];


 
include 'Connection.php';

if(isset($_POST['order_btn'])){
      
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $mode = $_POST['mode'];
    $flat = $_POST['flat'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pin_code = $_POST['pin_code'];
    $Rent_days = $_POST['Rent_days'];

    $cart_query = mysqli_query($con, "SELECT * FROM cart");
    $price_total = 0;
    if(mysqli_num_rows($cart_query) > 0){
        while($product_item = mysqli_fetch_assoc($cart_query)){
            $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .' )';
            $product_price = ($product_item['price'] * $product_item['quantity']);
            $price_total += $product_price;
        }
    }

    $total_product = implode(', ',$product_name);
    $detail_query = mysqli_query($con, "INSERT INTO rent(name, number, email, mode, flat,
    street, city, state, pin_code, total_products, total_price,Rent_days) VALUES(' $name','$number',
    '$email','$mode','$flat','$street','$city','$state','$pin_code','$total_product',
    '$price_total','$Rent_days')") or die('query failed');

    $detail_query = mysqli_query($con, "DELETE FROM cart");

//order message code



    if($cart_query && $detail_query){
       echo "
       <div class='order-message-container'>
           <div class='message-container'>
              <h3>Thank you for shopping</h3>
             <div class='order-detail'>
                   <span class='total'> Total :".$total_product."</span>
                   <span class='total'> Total : ".$price_total." </span>
             </div>
             <div class='customer-details'>
                 <p> Your name : <span>".$name."</span> </p>
                 <p> Your number : <span>".$number."</span> </p>
                 <p> Your email : <span>".$email."</span> </p>
                 <p> Your address : <span>".$flat.", ".$street.", ".$city.", ".$state.",
                  ".$pin_code."</span> </p>
                 <p> Rent Days : <span>".$Rent_days."</span> </p>
                 
                 <p> Your Payment : ".$mode." <span></span> </p>
                 <p>(Pay when product arrives)</p>

             </div>
               <a href='product.php' class='btn'>Continue shopping</a>
           </div>
       </div>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php include 'homeheader.php';?>

<div class="container">
    <section class="checkout-form">

    <h1 class="heading">complete your order</h1>

        <form action="" method="post">

        <div class="display-order">
        <?php
           $select_cart = mysqli_query($con, "SELECT * FROM cart");
          // $total = 0;
           $grand_total = 0;
           if(mysqli_num_rows($select_cart) > 0){
             while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                $total_price = ($fetch_cart['price'] * $fetch_cart['quantity']);
                $grand_total += $total_price;
        ?>
        <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
        <?php
             }
        }else{
            echo "<div class='display-order'><span>your cart is empty</span></div>";
        }
        ?>
        <span class="grand-total"> Grand Total : <?= $grand_total; ?></span>
     </div>

            <div class="flex">
                <div class="inputBox">
                    <span>Your Name</span>
                    <input type="text" placeholder="enter your name" name="name" required value="<?= $username?>">
                </div>
                <div class="inputBox">
                    <span>Your Number</span>
                    <input type="number" placeholder="enter your number" name="number" required>
                </div>
                <div class="inputBox">
                    <span>Your Email</span>
                    <input type="email" placeholder="enter your email" name="email" required value="<?= $email?>"> 
                </div>
                <div class="inputBox">
                    <span>Payment Method</span>
                    <select name="mode">
                        <option value="cash on delivery">Cash on delivery</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>Address line 1</span>
                    <input type="text" placeholder="e.g. flat no." name="flat" required>
                </div>
                <div class="inputBox">
                    <span>Address line 2</span>
                    <input type="text" placeholder="e.g. street name" name="street" required>
                </div>
                <div class="inputBox">
                    <span>City</span>
                    <input type="text" placeholder="e.g. muzaffarpur" name="city" required>
                </div>
                <div class="inputBox">
                    <span>State</span>
                    <input type="text" placeholder="e.g. bihar" name="state" required>
                </div>
                <div class="inputBox">
                    <span>Pin code</span>
                    <input type="text" placeholder="e.g. 123456" name="pin_code" required>
                </div>
                <div class="inputBox">
                    <span>Rent Days</span>
                    <select name="Rent_days">
                        <option value="1 month">one Month</option>
                        <option value="15 Days">fifteen days</option>
                        <option value="10 Days">ten days</option>
                        <option value="1 week">One Week</option>
                        <option value="5 Days">five days</option>
                        <option value="4 Days">four days</option>
                    </select>
                </div>
            </div>
            <input type="submit" value="order now" name="order_btn" class="btn" >
            
        </form>

    </section>

</div>

</body>
<footerr> <?php include 'footerr.html';?> </footerr>
</html>