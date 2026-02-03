<?php
include("con1.php");
$id=$_GET['id'];
$query="DELETE FROM `feedback` WHERE `feedback`.`id` = $id";
mysqli_query($con,$query);
header("location:feedbackmaster.php");
?>
