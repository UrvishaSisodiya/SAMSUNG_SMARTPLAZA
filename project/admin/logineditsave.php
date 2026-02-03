<html>
	<body>
		<?php
		include("con1.php");
		$id=$_POST['id'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query="UPDATE `login` SET `username` = '$username', `password` = '$password' WHERE `login`.`id` = $id";
		mysqli_query($con,$query);
		header("location:loginmaster.php");
		?>
	</body>
</html>


