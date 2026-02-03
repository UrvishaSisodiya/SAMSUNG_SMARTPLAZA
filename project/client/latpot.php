
<br><br><br><br><br>
<!DOCTYPE html>
<html lang="en">

<head>

   <title>Samsung SmartPlaza</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="templatesjungle">
    <meta name="keywords" content="electronics gadget">
    <meta name="description" content="electronics gadget website template">
    <?php include("header.php");?>
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
	</style>
	
</head>


<body>

<!-- svg icon -->
   <?php include ('svgicon.php');?>
     
    <?php include('con1.php');
	$query="select *from item where category='smartphone'";
	$result=mysqli_query($con,$query);
	echo"<table align='center' style='margin-left:50px' bgcolor='#FFFFFF'><br><br><br>
		<h2 align='center'><font color='#CCCCCC' size='+3'><u><b>Latpot</b></u></font></h2>";
	$cnt = 0;
	while($row=mysqli_fetch_array($result))
	{
		$cnt = $cnt + 1;
		echo "<td>";
		echo "<br>";

		echo"<div class='swiper mySwiper'>
                <div class='swiper-wrapper'>
                    <div class='swiper-slide'>
                        <div class='product-item position-relative'>
						
                            <img src='project_image/$row[4]' height='300'> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp
                            <div class='cart-concern'>
                                <div class='cart-button d-flex justify-content-between align-items-center px-4'>
                                    <a href='addtocart.php' class='btn-wrap d-flex align-items-center text-capitalize fs-6'>add
                                        to cart <svg class='arrow' width='20' height='20'>
                                            <use xlink:href='#arrow-right'></use>
                                        </svg>
                                    </a>
                                    <a href='single-product.html' class='view-btn'>
                                        <svg class='expand' width='16' height='16'>
                                            <use xlink:href='#expand'></use>
                                        </svg>
                                    </a>
                                    <a href='#' class='wishlist-btn'>
                                        <svg class='wishlist' width='20' height='20'>
                                            <use xlink:href='#wishlist'></use>
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
	
   <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
	<?php include("footer.php");?>
</body>
</html>




    


        
		  