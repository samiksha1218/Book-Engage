<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">

    <form action="RegisterScript.php" method="post">
        <h3>REGISTER NOW</h3>
        <input type="text" name="username" placeholder="Enter your name" required class="box">
        <input type="email" name="email" placeholder="Enter your email" required class="box">
        <input type="date" name="dob" placeholder="Enter your Date of Birth" required class="box">
        <input type="password" name="pass" placeholder="Enter your password" required class="box">
        <input type="submit" name="submit" value="Register Now" class="btn">
        <p>Already have an account? <a href="login.php"> Login now</a></p>
    </form>
    
</div>

</body>
<footerr> <?php include 'footerr.html';?> </footerr>
</html>
