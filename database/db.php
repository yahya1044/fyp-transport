<?php
$conn=mysqli_connect('localhost','root','','transport');
if($conn->connect_error) {
    die("Error: Couldn't connect: ".$conn->connect_error);
}
?>