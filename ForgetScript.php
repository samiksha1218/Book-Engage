<?php
$email = null;
$dob = null;
$pass = null;

$email = $_POST['email'];
$dob = $_POST['dob'];
$pass = $_POST['pass'];
include 'Connection.php';
$sql =" UPDATE register set pass= '$pass' where email='$email' and dob = '$dob'";
if($con->query($sql)== true ) {
    
    echo "Your Password has Reset!";

}
else{
    echo $con ->error;
}

?>
    

