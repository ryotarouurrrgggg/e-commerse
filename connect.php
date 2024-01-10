<?php 

$conns = mysqli_connect("localhost","root","","products");

if(mysqli_connect_errno()){
    die("Cannot Connect To database".mysqli_connect_errno());
}
?>