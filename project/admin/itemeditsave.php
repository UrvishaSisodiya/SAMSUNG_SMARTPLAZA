<?php 
	include("con1.php");
	$id=$_POST['id'];
	$itemname=$_POST['itemname'];
	$category=$_POST['category'];
    $size=$_POST['size'];
	$price=$_POST['price'];
	$image=$_FILES['im']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],"img/".$image);
	$query="UPDATE `item` SET `Itemname` = '$itemname', `Category` = '$category',`price` = '$price', `image` = '$image' 
	WHERE `item`.`id` = $id";
	mysqli_query($con,$query);
	header("location:itemmaster.php");
	if($result==NULL)
	{
?>
<script>
	alert("Record Not Updated");
	window location="itemmaster.php";
</script>
<?php
	}
	else
	{
		header("location:itemmaster.php");
	}
?>