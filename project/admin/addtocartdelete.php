<?php
	include("con1.php");
	$id=$_GET['id'];
	$itemname=$_GET['itemnm'];
	$price=$_GET['price'];
	$quantity=$_GET['quantity'];
	$total=$_GET['total'];
	$image=$_GET['image'];
	$username=$_GET['username'];
	$cart_date=$_GET['cart_date'];
	$delete=$_GET['delete'];
	
	$query="DELETE FROM `addtocart` WHERE `addtocart`.`id` = '$id'";
	mysqli_query($con,$query);
	header("location:addtocartmaster.php");
?>

