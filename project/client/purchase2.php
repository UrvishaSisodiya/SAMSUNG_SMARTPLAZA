<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit();
}
?>
<br><br><br><br><br><br><br><br>
<!DOCTYPE html><head>
    <meta charset="utf-8">
    <title>Samsung SmartPlaza</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
   
   <link href="css/style.css" rel="stylesheet">


<?php include("con1.php");

// Redirect if not logged in


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values and sanitize
    $itemname = $_POST['itemname'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $image = $_POST['image'];
    $cart_date = $_POST['cart_date'];
    $username = $_SESSION['username']; // Use session username

    // Clean price string: remove ₹, spaces, commas
    $price_clean = str_replace(['₹', ' ', ','], '', $price);

    // Validate numeric inputs
    if (!is_numeric($price_clean) || !is_numeric($quantity)) {
        die("Price and quantity must be numeric. Got price='$price' and quantity='$quantity'");
    }

    // Calculate total using cleaned price
    $total = (float)$price_clean * (int)$quantity;

    // Insert query (assuming id is auto-increment)
    $sql = "INSERT INTO addtocart (itemname, price, quantity, total, image, username, cart_date)
            VALUES ('$itemname', '$price_clean', '$quantity', '$total', '$image', '$username', '$cart_date')";

    if (mysqli_query($con, $sql)) 
	{
        header("Location: viewcart.php");
        exit();
    } else {
        echo "Database Error: " . mysqli_error($con);
    }
} else {
    echo "Invalid access method.";
}
?>

 <br><br><br><br><br><br><br><br><br>
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php include ('footer.php');?>

</body>
</html>

