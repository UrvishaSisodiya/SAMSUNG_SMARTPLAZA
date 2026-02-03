<html>
<body> 
<?php
include("con1.php");
$username=$_POST['username'];
$password=$_POST['password'];
mysqli_query($con,"INSERT INTO `login` (`username`, `password`) VALUES ('$username','$password')");
header("location:loginmaster.php");
?>
</body>
</html>