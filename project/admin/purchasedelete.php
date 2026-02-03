<?php
	include("con1.php");
	$id=$_GET['id'];
	$name=$_GET['nm'];
	$address=$_GET['address'];
	$city=$_GET['city'];
	$itemname=$_GET['itemname'];
	$total=$_GET['total'];
	$payment=$_GET['payment'];
	$pur_date=$_GET['pur_date'];
	
	
	$query="DELETE FROM `purchase` WHERE `purchase`.`id` = '$id'";
	mysqli_query($con,$query);
	header("location:purchasemaster.php");
?>

