
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
<?php include 'header.php';?>
<br><br><br><br>
<body>
   
    <main id="billboard">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner" style="height: 100vh;">

            <div class="carousel-item active" 
                 style="background: url('project_image/samsung_store.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 100vh;">
                <div class="container">
                    <div class="offset-2 position-absolute top-50 start-0 translate-middle-y">
                        <!--<p class="fs-2 text-white">up to 30% off</p>-->
                       <!--<h2 class="display-1 text-gray fw-medium mt-3">Experience the power <br>of smarter world</h2>-->
                        <a href="home.php" class="btn btn-outline-light mt-3">SHOP COLLECTION </a>
                    </div>
                </div>
            </div>

            <div class="carousel-item" 
                 style="background: url('project_image/samsung_phone.webp'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 100vh;">
                <div class="container">
                    <div class="offset-2 position-absolute top-50 start-0 translate-middle-y">
                        <p class="fs-2 text-white">New Arrivals</p>
                        <h2 class="display-1 text-white fw-medium mt-3"><br></h2>
                        <a href="smartphone.php" class="btn btn-outline-light mt-3">EXPLORE NOW</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item" 
                 style="background: url('project_image/all.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 100vh;">
                <div class="container">
                    <div class="offset-2 position-absolute top-50 start-0 translate-middle-y">
                        <p class="fs-2 text-white">Limited Time Offer</p>
                        <h2 class="display-1 text-white fw-medium mt-3">Find the Perfect <br>product for You</h2>
                        <a href="shop.php" class="btn btn-outline-light mt-3">SHOP ALL</a>
                    </div>
                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
</main>

    <section id="collection">
        <div class="container-fluid">
            <div class="row mt-4">
                <div class="col-lg-6 ps-lg-0">
                    <div class="position-relative img-fluid"
                        style=" background: url(project_image/lap.jpg);background-size: cover; background-repeat: no-repeat; background-position: center; height: 70vh; width: 100vh">
                        <div class="text position-absolute text-center m-auto w-100 top-50 bg-black bg-opacity-10 py-5">
                            <h3 class="display-4 fw-medium text-white mb-3">Deal Of the day</h3>
                            <p class="fs-3 text-white">Up to 45% off on laptops</p>
                            <div>
                                <a href="laptop.php" class="btn btn-light mt-3">SHOP Now </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0">
                    <div class="position-relative img-fluid"
                        style="background: url(project_image/tv1.jpg);background-size: cover; background-repeat: no-repeat; background-position: center; height: 70vh; width: 100vh">
                        <div class="text position-absolute text-center m-auto w-100 top-50 bg-black bg-opacity-10 py-5">
                            <h3 class="display-4 fw-medium text-white mb-3">The Best Selling</h3>
                            <p class="fs-3 text-white">Starting price from &#8377 1,64,800</p>
                            <div>
                                <a href="tv.php" class="btn btn-light mt-3">SHOP Now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="new-arrivals" class="position-relative padding-medium">
        <div class="container-fluid">
            <div class="d-block d-md-flex justify-content-between align-items-center mb-4">
                <h3 class="display-5 fw-medium ">NEW ARRIVAL ITEMS</h3>
                <div><a href="#" class="btn btn-dark">SHOP ALL</a></div>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
				
						 
                    <div class="swiper-slide">
                        <div class="product-item position-relative">
                            <a href="smartphone.php" class="item-name"><img src="project_image/Galaxy S24 Ultra.jpg" alt="new1" class="img-fluid"  height="100" width="400"></a>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center px-4">
                                    <a href="addtocart.php" class="btn-wrap d-flex align-items-center text-capitalize fs-6">
									<font color='#1974D2' size='+2'><u>add to cart </u></font><svg class="arrow" width="20" height="20">
                                            <use xlink:href="#arrow-right"></use>
                                        </svg>
                                    </a>
                                    <a href="fridge.php" class="view-btn">
                                        <svg class="expand" width="16" height="25">
                                            <use xlink:href="#expand"></use>
                                        </svg>
                                    </a>
                                    <a href="#" class="wishlist-btn">
                                        <svg class="wishlist" width="20" height="20">
                                            <use xlink:href="#wishlist"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="mt-2">
                                <h5>Galaxy S24 Ultra</h5>
                                <h5 class="money fw-bold ">&#8377 1,00,990</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item position-relative">
                            <a href="fridge.php" class="item-name"><img src="project_image/4door1.jpg" alt="new1" class="img-fluid"  height="150" width="420"></a>
                                                       <div class="mt-2">
                                <h5>4Door Fridge</h5>
                                <h5 class="money fw-bold ">&#8377 99,990</h5>
                            </div>
                        </div>
                    </div>
					
                    <div class="swiper-slide">
                        <div class="product-item position-relative">
                            <a href="buds.php" class="item-name"><img src="project_image/headphone.jpg" alt="new1" class="img-fluid" height="150" width="420"></a>
                            <div class="mt-2">
                                <h5>Galaxy Headphone</h5>
                                <h5 class="money fw-bold ">&#8377 2,999</h5>
                            </div>
                        </div>
                    </div>
					
                    <div class="swiper-slide">
                        <div class="product-item position-relative">
						<a href="other.php" class="item-name">
                            <img src="project_image/wm01 (3).jpg" alt="new1" class="img-fluid" height="150" width="420"></a>
                                                        <div class="mt-2">
                                <h5>Washing Machine</h5>
                                <h5 class="money fw-bold ">&#8377 69,999</h5>
                            </div>
                        </div>
                    </div>
					
                    <div class="swiper-slide">
                        <div class="product-item position-relative">
						<a href="buds.php" class="item-name">
                            <img src="project_image/buds live.jpg" alt="new1" class="img-fluid" height="150" width="420"></a>
                            <div class="mt-2">
                                <h5>Galaxy Buds 2 pro</h5>
                                <h5 class="money fw-bold ">&#8377 15,990</h5>
                            </div>
                        </div>
                    </div>
					
                    <div class="swiper-slide">
                        <div class="product-item position-relative">
						<a href="laptop.php" class="item-name">
                            <img src="project_image/book 5 pro.jpg" alt="new1" class="img-fluid" height="150" width="420"></a>
                            <div class="mt-2">
                                <h5>Galaxy Book 5 pro</h5>
                                <h5 class="money fw-bold ">&#8377 1,31,990</h5>
                            </div>
                        </div>
                    </div>
					
                    <div class="swiper-slide">
                        <div class="product-item position-relative">
						<a href="other.php" class="item-name">
                            <img src="project_image/28lm.jpg" alt="new1" class="img-fluid" height="150" width="420"></a>
                            <div class="mt-2">
                                <h5>28L Microwave</h5>
                                <h5 class="money fw-bold ">&#8377 17,990</h5>
                            </div>
                            
                        </div>
                    </div>
					
                    <div class="swiper-slide">
                        <div class="product-item position-relative">
						<a href="smartwatch.php" class="item-name">
                            <img src="project_image/fit3.jpg" alt="new1" class="img-fluid" height="150" width="420"></a>
                            <div class="mt-2">
                                <h5>Galaxy Fit3 SmartWatch</h5>
                                <h5 class="money fw-bold ">&#8377 2,999</h5>
                            </div>
                        </div>
                    </div>  
					      
                        </div>
                    </div>
                </div>
				</div></div>
                <div class="swiper-pagination new-arrival-pagination position-relative d-block d-lg-none mt-4"></div>
            </div>
        </div>
    </section>

    <section id="review">
       <h3 class="display-1 mb-5 text-muted opacity-25 fw-medium secondary-font text-center">CUSTOMER'S REVIEWS</h3>

        <div class="container">
            <div class="swiper testimonial-Swiper text-center">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <p class="review fw-light fs-5 lh-base">"Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Voluptate non
                            explicabo ea possimus consequuntur vel."</p>
                        <span class="fw-bold d-block mt-3">JOHN DOE</span>
                    </div>
                    <div class="swiper-slide">
                        <p class="review fw-light fs-5 lh-base">"Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Voluptate non
                            explicabo ea possimus consequuntur vel."</p>
                        <span class="fw-bold d-block mt-3">WILLIAM JACK</span>
                    </div>
                    <div class="swiper-slide">
                        <p class="review fw-light fs-5 lh-base">"Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Voluptate non
                            explicabo ea possimus consequuntur vel."</p>
                        <span class="fw-bold d-block mt-3">NICHOLAS SHRESTHA</span>
                    </div>
                    <div class="swiper-slide">
                        <p class="review fw-light fs-5 lh-base">"Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Voluptate non
                            explicabo ea possimus consequuntur vel."</p>
                        <span class="fw-bold d-block mt-3">WILLIAM JACK</span>
                    </div>
                    <div class="swiper-slide">
                        <p class="review fw-light fs-5 lh-base">"Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Voluptate non
                            explicabo ea possimus consequuntur vel."</p>
                        <span class="fw-bold d-block mt-3">NICHOLAS SHRESTHA</span>
                    </div>
                </div>
                <div class="swiper-pagination testimonial-pagination position-relative mt-5"></div>
            </div>
        </div>
    </section>

    <section id="video-modish" class="padding-medium">
     <div class="imageblock position-relative d-flex justify-content-center">
    <img class="img-fluid" src="project_image/videoframe_3257.png" alt="img"  style="width: 60%; height: auto; align:center">
    <a type="button" data-bs-toggle="modal" data-src="project_image\v1.webm" data-bs-target="#myModal" class="play-btn position-absolute top-50 start-50 translate-middle">
        <div class="play border border-2 border-white p-4 p-md-5 rounded-circle">
            <svg class="play-icon text-white" width="60" height="60">
                <use xlink:href="#play"></use>
            </svg>
        </div>
            </a>
        </div>
    </section>

    <section id="best-selling" class="position-relative ">
        <div class="container-fluid">
            <div class="d-block d-md-flex justify-content-between align-items-center mb-4">
                <h3 class="display-5 fw-medium ">Best-Selling ITEMS</h3>
                <div><a href="#" class="btn btn-dark">SHOP ALL</a></div>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product-item position-relative">
						<a href="smartphone.php" class="item-name">
                           <img src="project_image/s25ultra.jpg" alt="new1" class="img-fluid" height="150" width="350"></a>
                            <div class="cart-concern">
                                <div class="cart-button d-flex justify-content-between align-items-center px-4">
                                    <a href="addtocart.php" class="btn-wrap d-flex align-items-center text-capitalize fs-6">
									<font color='#1974D2' size='+2'><u>add to cart</u></font> </a>
                                    <a href="single-product.html" class="view-btn">
                                        <svg class="expand" width="16" height="16">
                                            <use xlink:href="#expand"></use>
                                        </svg>
                                    </a>
                                    <a href="smartphone.php" class="wishlist-btn">
                                        <svg class="wishlist" width="20" height="20">
                                            <use xlink:href="#wishlist"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="mt-2"><br><br><br>
                                <h5>Galaxy S25 Ultra Smartphone</h5>
                                <h5 class="money fw-bold">&#8377 1,41,999</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item position-relative">
						<a href="laptop.php" class="item-name">
                            <img src="project_image/book 4 pro.jpg" alt="new1" class="img-fluid" height="150" width="420"></a>
                            <div class="mt-2">
                                <h5>Galaxy Book4 Pro Laptop</h5>
                                <h5 class="money fw-bold">&#8377 48,990</h5>
                            </div>
                        </div>
                    </div>
					
                    <div class="swiper-slide">
                        <div class="product-item position-relative">
						<a href="other.php" class="item-name">
                            <img src="project_image/tabs10ultra.jpg" alt="new1" class="img-fluid" height="150" width="420"></a>
                            <div class="mt-2">
                                <h5>Galaxy tab S10 Ultra</h5>
                                <h5 class="money fw-bold">&#8377 1,22,999</h5>
                            </div>
                        </div>
                    </div>
					
                    <div class="swiper-slide">
                        <div class="product-item position-relative">
						<a href="ac.php" class="item-name">
                            <img src="project_image/ac1.webp" alt="new1" class="img-fluid" height="150" width="420"></a>
                            <div class="mt-2">
                                <h5>Samsung 3Star AC</h5>
                                <h5 class="money fw-bold">&#8377 35,990</h5>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item position-relative">
						<a href="speaker.php" class="item-name">
                            <img src="project_image/level box bluetooth.jpg" alt="new1" class="img-fluid" height="150" width="420"></a>
                            <div class="mt-2">
                                <h5>Samsung Level Box Bluetooth Speaker</h5>
                                <h5 class="money fw-bold">&#8377 4,485</h5>
                            </div>
                        </div>
                    </div>
					
                   <div class="swiper-slide">
                     <div class="product-item position-relative">
					 <a href="camera.php" class="wishlist-btn">
                        <img src="project_image/nx300.jpg" alt="new1" class="img-fluid" height="150" width="400"></a>
                        <div class="mt-2"><br>
                            <h5>NX 300 Camera</h5>
                            <h5 class="money fw-bold ">&#8377 72,999</h5>
                       </div>
                     </div>
                 </div>
                 <div class="swiper-slide">
                     <div class="product-item position-relative">
					 <a href="other.php" class="item-name">
                        <img src="project_image/ring1.jpg" alt="new1" class="img-fluid" height="150" width="420"></a>
                        <div class="mt-2">
                            <h5>Samsung Galaxy Ring</h5>
                            <h5 class="money fw-bold ">&#8377 36,999</h5>
                        </div>
                    </div>
                 </div>
                 <div class="swiper-slide">
                    <div class="product-item position-relative">
					   <a href="laptop.php" class="item-name">
                            <img src="project_image\all-in-one-PC series 7.jpg" alt="new1" class="img-fluid" height="150" width="420"></a>
                            <div class="mt-2">
                                <h5>Samsung All-In-One Pro PC</h5>
                                <h5 class="money fw-bold">&#8377; 35,990</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination new-arrival-pagination position-relative d-block d-lg-none mt-4"></div>
            </div>
        </div>
    </section>

    <section id="blogs" class="padding-medium">
        <div class="container-fluid">
            <div class="d-block d-md-flex justify-content-between align-items-center mb-4">
                <h3 class="display-5 fw-medium">NEWS ARTICLES</h3>
                <div><a href="blog.html" class="btn btn-dark">read all</a></div>
            </div>
            <div class="article">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <a  href="other.php"> <img src="project_image/first.jpg" class="img-fluid" alt="blog-img" style="height:300px; object-fit:cover;">
                        </a>
                        <h5 class="fs-3 mt-2">Best electric product <br>to buy this season.</h5>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <a href="buds.php"> <img src="project_image/headphone3.jpg"class="img-fluid" alt="blog-img" style="height:300px; object-fit:cover;">
                        </a>
                        <h5 class="fs-3 mt-2">How to follow the trend<br> in budget list.</h5>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <a href="other.php"> <img src="project_image/istockphoto-817873046-612x612.jpg"class="img-fluid" alt="blog-img" style="height:300px; object-fit:cover;">
                        </a>
                        <h5 class="fs-3 mt-2">unique gadget to<br> own by tech collectors.</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="subscribe" class="padding-medium pt-0">
        <div class="container">
            <h3 class="display-1 text-center mb-5 text-muted opacity-25 secondary-font fw-medium">SUBSCRIBE US</h3>
            <div class="offset-lg-3 col-lg-6">
                <form >
                    <div class="input-group">
                        <input type="email" class="form-control rounded-0 border-black"
                            placeholder="Write your email address here...">
                        <span class="input-group-btn">
                            <button class="btn btn-dark rounded-0 px-5" type="submit">Subscribe</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </section>

    
    <!-- Video Popup -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg class="bi"
                            width="40" height="40">
                            <use xlink:href="#close-sharp"></use>
                        </svg></button>
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
<?php include 'footer.php';?>
</body>

</html>