<?php

$email=$_POST['email'];
$pass=$_POST['pass'];
require 'Connection.php';

$sql = "SELECT * FROM register WHERE  email ='$email'  AND pass = '$pass'";

$result = $con->query($sql);

if($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email']; 
    header("location:homepage.php");

}else
    echo "Invalid Username/password";
/*$stmt->close();*/
$con->close();
?>