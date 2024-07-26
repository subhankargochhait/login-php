<?php

$con=mysqli_connect("localhost","root","","11april");

$n=$_POST['name'];
$ph=$_POST['phone'];
$e=$_POST['email'];
$p=$_POST['pass'];

$ins="INSERT INTO login SET username='$n',phone='$ph',email='$e',password='$p'";
if($con->query($ins)){
    header("location:index.php");
}
?>