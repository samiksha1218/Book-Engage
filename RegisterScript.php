<?php
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$dob = $_POST['dob'];


include 'Connection.php';
$sql = "INSERT INTO register(username, email, pass, dob) VALUES('$username', '$email', '$pass' , '$dob')";
if($con->query($sql)==true) {
    echo "Registration Successful";
} else {
    echo $con->error;
}

$con->close();
?>