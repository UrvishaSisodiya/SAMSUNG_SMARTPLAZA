<?php
include("con1.php");
$itemname=$_POST['itemname'];
$category=$_POST['category'];
$price=$_POST['price'];
$image=$_FILES['im']['name'];
move_uploaded_file($_FILES['im']['tmp_name'],"img/".$image);
mysqli_query($con,"INSERT INTO item( `itemname`,`category`, `price`, `image`) 
VALUES ('$itemname','$category','$price', '$image')"); 
header("location:itemmaster.php");
?>
 

	