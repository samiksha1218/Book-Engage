<header class="header">
    <div class="flex">
       <img src="Logo.jpg" alt="" width="60px" height="65px">
        <a href="#" class="logo">Book engage</a>
        <nav class="navbar">
            <a href="adminindex.php">Home</a>
        
            <a href="./adminlogin.php">Logout</a>
        </nav>
    </div>
</header>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="admin.css">
</head>
<body>

<div class="form-container">

    <form action="adminregisterScript.php" method="post">
        <h3>REGISTER NOW</h3>
        <input type="text" name="name" placeholder="Enter your name" required class="box">
        <input type="email" name="email" placeholder="Enter your email" required class="box">
        <input type="date" name="dob" placeholder="Date of Birth" required class="box">    
        <input type="password" name="pass" placeholder="Enter your password" required class="box">
        <input type="submit" name="submit" value="Register Now" class="btn">
        <p>Already have an account? <a href="adminlogin.php"> Login now</a></p>
    </form>
    
</div>

</body>
<footerr> <?php include 'adminfooterr.html';?> </footerr>
</html>
