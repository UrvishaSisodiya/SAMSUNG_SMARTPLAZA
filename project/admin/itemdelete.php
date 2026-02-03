 <?php
include("con1.php");
$id=$_GET['id'];
$query="DELETE FROM `item` WHERE `item`.`id` = $id";
mysqli_query($con,$query);
header("location:itemmaster.php");
?>


	