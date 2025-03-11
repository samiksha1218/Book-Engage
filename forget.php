<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'header.php';?>
<div class="form-container">

    <form action="ForgetScript.php" method="post">
        <h3>Forgot Password</h3>
        <input type="email" name="email" placeholder="Enter your email" required class="box">
        <input type="date" name="dob" placeholder="Enter your Date of birth" required class="box">
        <input type="password" name="pass" placeholder="Enter your password" required class="box">
        <input type="submit" name="submit" value="Password Reset" class="btn">
       

        
    </form>
    
</div>

</body>
</html>


</body>
<footerr> <?php include 'footerr.html';?> </footerr>
</html>