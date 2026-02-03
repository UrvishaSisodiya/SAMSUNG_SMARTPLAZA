<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Samsung SmartPlaza</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">

    <!-- Icon Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries CSS -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Bootstrap and Custom CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script type="text/javascript">
        function validateForm() {
            var qty = document.forms["addtocart"]["quantity"].value;
            if (qty == null || qty == "") {
                alert("Quantity must be filled out");
                return false;
            }
            if (!qty.match(/^[0-9]+$/)) {
                alert("Quantity must be a number");
                return false;
            }
        }
    </script>

    <style>
        .button {
            border-radius: 18px;
            background-color: #FE5D37;
            border: none;
            color: white;
            padding: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 140px;
            height: 40px;
        }
    </style>
</head>
<body>
<?php include('header.php'); ?>

<br><br><br><br><br>

<?php
	include("con1.php");
	$id=$_GET['id'];
	$query="select * from item where id=".$id;
	//$price=$_GET['price'];
	//$q1="select price from addtocart where price=".$price;


	$result=mysqli_query($con,$query);
	//$ins="insert into addtocart(`id`, `itemname`, `price`, `quantity`, `total`, `image`, `username`, `cart_date`) VALUES ($id,$itemname, $price, $quantity, $total`, `image`, `username`, `cart_date`))
	while($row=mysqli_fetch_array($result))



	{
?>
<form method="post" action="purchase2.php" name="addtocart.php" onSubmit="return validateForm()">
  <table align='center' style='margin-center:100px'>
	<tr>
		<td>
			<input type="hidden" name="id" value="<?php echo $id;?>"/>
			<label><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Itemname</h4></label>
		</td>
		<td><font size='+2'>
			<input type="text" name="itemname" value="<?php echo $row['1'];?>"/>
		</td>
	</tr>
	<tr>
		<td>
			<label><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price</h4></label>
		</td>
		<td><font size='+2'>
			<input type="text"name="price" height="100%" value="<?php echo $row['3'];?>"/>
		</td>
	</tr>
	<tr>
		<td>
			<label><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity</h4></label>
		</td>
		<td><font size='+2'>
			<input type="text" name="quantity" />
		</td>
	</tr>
	
	<tr>
		<td>
			<label><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cart_date</h4></label>
	
	
		</td>
		<td><font size='+2'>
			<input type="date" name="cart_date" value="<?php echo $row['7'];?>" />
		</td>
	</tr>

	<tr>
		<td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<img src="<?php echo "../client/project_image/$row[4]"?>" height=200 width=200 />
<?php
	$img="project_image/$row[4]";
?>
			<input type="hidden" name="image" value="<?php echo $img;?>"/>
		</td>
	</tr>
	<br><br>
	<tr>
		<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	<button class="button button4">Add To Cart</button>

	</font>
	</table>
</form>
</div>
</section> <br><br><br><br><br>
<?php
}
?>
<br>
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php include ('footer.php');?>

</body>
</html>

