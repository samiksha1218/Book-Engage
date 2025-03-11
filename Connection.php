<?php
$con = new mysqli('localhost', 'root', '@iksha012', 'book_engage');
if($con->connect_error) {
    die($con->connect_error);
}