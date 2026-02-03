<?php
	include("con1.php");
	$name=$_POST['nm'];
	$city=$_POST['city'];
	$mno=$_POST['mno'];
	$email=$_POST['email'];
	$feedback=$_POST['feedback'];
	
	mysqli_query($con,"INSERT INTO `feedback` (`name`, `city`,`mobileno`, `email`,) VALUES ('$name', '$address', '$city', '$mno', '$email', '$feedback')");
	header("location:home.php");
?>