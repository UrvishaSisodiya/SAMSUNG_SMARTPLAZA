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
    <!-- Include your stylesheets and fonts here -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .button {
            border-radius: 18px;
            background-color: #CCCCCC;
            border: none;
            color: white;
            padding: 5px;
            font-size: 16px;
            width: 120px;
            height: 30px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php include('header.php'); ?>

<br><br><br><br><br>

<section class="cta-area d-flex flex-wrap">
    <div class="container">

    <?php
    $con = mysqli_connect("localhost", "root", "", "samsung_smartplaza");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = $_SESSION['username'];
    $query = "SELECT * FROM addtocart WHERE username='$username'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        $total_amount = 0;
        echo '<form method="post" action="deletecart.php" onsubmit="return validateForm();">';
        echo '<table class="table table-bordered">';
        echo '<thead><tr>
                <th>Image</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Purchase Date</th>
                <th>Action</th>
              </tr></thead><tbody>';

        while ($row = mysqli_fetch_assoc($result)) {
            $item_total = $row['price'] * $row['quantity'];
            $total_amount += $item_total;

            echo '<tr>';
            echo '<td><img src="' . htmlspecialchars($row['image']) . '" alt="Product Image" height="100" width="100"></td>';
            echo '<td><input type="text" name="itemname" value="' . htmlspecialchars($row['itemname']) . '" readonly></td>';
            echo '<td><input type="number" name="price" value="' . $row['price'] . '" readonly></td>';
            echo '<td><input type="number" name="quantity/" value="' . $row['quantity'] . '" readonly></td>';
            echo '<td><input type="number" name="total" value="' . $item_total . '" readonly></td>';
            echo '<td><input type="date" name="pur_date" value="' . htmlspecialchars($row['cart_date']) . '" readonly></td>';
            echo '<td><a href="deletecartitem.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Delete</a></td>';
            echo '</tr>';
        }

        echo '<tr><td colspan="4" style="text-align:right;"><strong>Total Amount:</strong></td>';
        echo '<td colspan="3"><strong>' . $total_amount . '</strong></td></tr>';

        echo '</tbody></table>';

        echo '<button type="submit" name="submit" class="btn" style="width:250px; background-color: #007bff; color: white; border: none;">Purchase</button>';
        echo '</form>';
    } else {
        echo '<p>Your cart is empty.</p>';
    }
    mysqli_close($con);
    ?>
    </div>
</section>

<script>
function validateForm() {
    // Example validation if needed
    return true;
}
</script>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php include ('footer.php');?>

</body>
</html>

