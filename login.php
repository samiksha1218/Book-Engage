<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">

    <form action="LoginScript.php" method="post">
        <h3>LOGIN</h3>
        <input type="email" name="email" placeholder="Enter your email" required class="box">
        <input type="password" name="pass" placeholder="Enter your password" required class="box">
        <input type="submit" name="submit" value="Login Now" class="btn">
        <br><br>
           <center> <a href="forget.php"><h2>Forgot Password ?</h2></a></center>

        <p>Don't have an account? <a href="register.php"> Register now</a></p>
    </form>
    
</div>

</body>
</html>


</body>
<footerr> <?php include 'footerr.html';?> </footerr>
</html>