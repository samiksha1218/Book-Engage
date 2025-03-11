<?php

$email=$_POST['email'];
$pass=$_POST['pass'];
require 'adminConnection.php';

$sql = "SELECT * FROM adminregister WHERE  email ='$email'  AND pass = '$pass'";
/**$stmt = $con->prepare($sql);
$stmt->bind_param("ss",$email,$pass);
$stmt->execute(); **/
$result = $con->query($sql);

if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    header("location:admin2ndpage.php");

    /*if($row['type'] == 'customer'){
        session_start();
    $_SESSION['email'] = $row['email'];
        header("Location:homepage.html");
    }elseif ($row['type'] == 'user'){
        session_start();
    $_SESSION['email'] = $row['email'];
       header("Location:hompage.html");
    }else
        echo "Invalid Username/password";
      */  
}else
    echo "Invalid Username/password";
/*$stmt->close();*/
$con->close();
?>