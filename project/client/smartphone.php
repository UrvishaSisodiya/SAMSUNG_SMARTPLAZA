<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Samsung SmartPlaza</title>
    <?php include('header.php'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="templatesjungle">
    <meta name="keywords" content="electronics gadget">
    <meta name="description" content="electronics gadget website template">

    <!--Bootstrap ================================================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Link Swiper's CSS ================================================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Style Sheet ================================================== -->
    <link rel="stylesheet" href="styles.css">

    <!-- Google Fonts ================================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    
		<style>
.product-list {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  padding: 20px;
  justify-content: center;
}

.product-item {
  width: 300;
  border: 1px solid #ccc;
  border-radius: 8px;
  padding: 20px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.05);
  transition: transform 0.2s ease, box-shadow 0.2s ease;
  background-color: #fff;
  text-align:left;
}

.product-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 16px 32px rgba(0,0,0,0.1);
}

.product-item img {
  width: 150;
  height: 300;
  border-radius: 20px;
}

.product-item h2 {
  font-size: 18px;
  margin: 12px 0 8px;
  color: #333;
}

.product-item .description {
  font-size: 14px;
  color: #666;
  margin-bottom: 12px;
}

.product-item .price {
  font-size: 16px;
  font-weight: bold;
  color: #27ae60;
  display: black;
  margin-bottom: 20px;
}

.product-item button {
  padding: 10px 16px;
  background-color: #3498db;
  color: black;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.product-item button:hover {
  background-color: #2980b9;
}
</style>
	
</head>
<br><br><br><br>

<body>
    <!-- svg icon -->
    <?php include ('svgicon.php');?>
	
   <?php
	include("con1.php");
	$query="select *from item where category='smartphone'";
	$result=mysqli_query($con,$query);
	echo"<table align='center' style='margin-left:50px'>
		<h2 align='center'><font color='orange' size='+3'><u><b>SMARTPHONE's</b></u></font></h2>";
	$cnt = 0;
	while($row=mysqli_fetch_array($result))
	{
		$cnt = $cnt + 1;
		echo "<td>";
		echo "<br>";

			echo"<div class='swiper mySwiper'>
                <div class='swiper-wrapper'>
                    <div class='swiper-slide'>
                        
						    <div class='product-list'>
                         <div class='product-item'>
                            <img src='project_image/$row[4]' height='250'> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp
                            <div class='cart-concern'>
                                <div class='cart-button d-flex justify-content-between align-items-center px-4'>
								
                                    <a href='addtocart.php?id=".$row[0]."'><font color='purpal' size='+2' ><u> Add to Cart</u></font></a>
									<svg class='arrow' width='20' height='20'>
                                            <use xlink:href='#arrow-right'></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>";
							echo"<br>";
		echo "<font size='+2'>";
		echo $row["itemname"];
		echo "<br>";
		echo "<font size='+2'>";
		echo $row["category"];
		echo "<br>";
		echo "<font size='+2'><b>";
		echo $row["price"];
		echo "<br>";
		echo "</font>";
		echo "</td>";
		if($cnt == 5)
		{
			echo "<tr>";
		    $cnt = 0;
		}
	}
	echo"</tr>";
	echo"<br>";
	echo"</table>";
	?>
   
    <!-- JavaScript Libraries 
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    Template Javascript -->
    <!--<script src="js/main.js"></script>-->
        </div>
<br>
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php include ('footer.php');?>

</body>
</html>



    


        
		  