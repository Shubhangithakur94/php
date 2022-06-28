<?php
include "config.php";
$name =$_POST["name"];
$email =$_POST["email"];
$country =$_POST["country"];
$phone =$_POST["phone"];
$pass =$_POST["pass"];

$sql = "INSERT INTO `regform` (`name`, `email`, `country`, `phone`, `pass`) VALUES ('$name', '$email' ,'$country', '$phone', '$pass')"; 

$query=mysqli_query($conn,$sql);
if ($query==true){
   header("location:index.html");   
}












?>