<?php
	include("con1.php");
	$name=$_POST['nm'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$pincode=$_POST['pincode'];
	$state=$_POST['state'];
	$country=$_POST['country'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$mno=$_POST['mno'];
	$email=$_POST['email'];
	$dob=$_POST['dob'];
	
	mysqli_query($con,"INSERT INTO `registration` (`name`, `address`, `city`,`pincode`, `state`, `country`, `username`, `password`, `gender`, `mobileno`, `email`, `dob`) VALUES ('$name', '$address', '$city', '$pincode', '$state', '$country', '$username', '$password',  '$gender', '$mno', '$email', '$dob')");
	header("location:home.php");
?>


