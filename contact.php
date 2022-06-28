<?php
include "config.php";
if (isset($_POST["contact"])){
    
 $fname = $_POST["fname"];
 $lname = $_POST["lname"];
 $email = $_POST["email"];
 $message =$_POST["message"];
 
$sql = "INSERT INTO `contact`(`fname`, `lname`, `email`, `message`) VALUES ('$fname','$lname','$email','$message')";
$query=mysqli_query($conn,$sql);
if ($query==true) {
      header("location:contacts.php"); 
}}


if (isset($_POST["enquiry"])){
 $name = $_POST["name"];
 $contact =$_POST["contac"];
 $email =$_POST["email"];
 $address =$_POST["address"];

 $sql ="INSERT INTO `enquiry` (`name` , `contact`, `email`, `address`) VALUES ('$name' ,'$contact', '$email', '$address')";
 $query=mysqli_query($conn,$sql);
 if ($query==true){
     header("location:index.php");
 }
}












?>



