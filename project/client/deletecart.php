			<?php
	session_start();
	if(!isset($_SESSION['username']))
	header("location:login.php");
	else
	{
?>

<?php
	include("con1.php");
	include("viwecart.php");
	$user=$_SESSION['username'];
	$total=$_POST['total'];
	$itemname=$_POST['itemname'];
	$payment=$total;
	$pur_date=$_POST['pur_date'];
	$q1="select * from registration where username='$user'";
	$res=mysqli_query($con,$q1);
	
	while($row=mysqli_fetch_array($res))
	{
		$name= $row['1'];
		$add=$row['2'];
		$city= $row['3'];
		
	}
	$p="INSERT INTO purchase( name, address, city, itemname,total, payment, pur_date) VALUES ('$name','$add','$city','$itemname','$total','$payment','$pur_date')";
	mysqli_query($con,$p);
	$q="delete from addtocart where username='$user'";
	mysqli_query($con,$q);
	//header("location:home.php");
?>
	<script type="text/javascript">
		alert("Congratulations! your order is conformed, Cash on delivery.....");
		window.location.href="home.php";
	</script>

<?php
	}
?>