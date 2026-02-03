<?php
	session_start();
	if(!isset($_SESSION['username']))
	header("location:login.php");
	else
	{
?>
<?php
	include("con1.php");
	$id=$_GET['id'];
	$user=$_SESSION['username'];
	$q="delete from addtocart where id='$id'";
	mysqli_query($con,$q);
	header("location:viewcart.php");
?>
	<script type="text/javascript">
		alert("Congratulations! your order is conformed, Cash on delivery....");
		window.location="index.php";
	</script>
<?php
	}
?>