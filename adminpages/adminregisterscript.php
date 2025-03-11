<?php
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$dob = $_POST['dob'];


include 'adminConnection.php';
$sql = "INSERT INTO adminregister(name, email, pass,dob) VALUES('$name', '$email', '$pass','$dob')";
if($con->query($sql)==true) {
    echo "Registration successful!";
    header("location:adminlogin.php");
} else {
    echo $con->error;
}

$con->close();
?>