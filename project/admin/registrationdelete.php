<?php
include("con1.php");
$id=$_GET['id'];
$name=$_GET['nm'];
$address=$_GET['address'];
$city=$_GET['city'];
$pincode=$_GET['pincode'];
$state=$_GET['state'];
$country=$_GET['country'];
$username=$_GET['username'];
$password=$_GET['password'];
$gender=$_GET['gender'];
$mno=$_GET['mno'];
$email=$_GET['email'];
$dob=$_GET['dob'];
$query="DELETE FROM `registration` WHERE `registration`.`id` = '$id'";
mysqli_query($con,$query);
header("location:registrationmaster.php");
?>

