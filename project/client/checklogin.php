<?php
	include("con1.php");
	$username=$_POST['username'];
	$password=$_POST['password'];
	if($username==""||$password=="")
	{
		header("location:login.php");
	}
	else
	{
		 $query="select * from registration where username= '$username'and password= '$password'";
		 
		 $result=mysqli_query($con,$query);
		 $res=mysqli_fetch_array($result);
		 $count=mysqli_num_rows($result);
		 if($count==0)
	 	{
 ?>
	 
	<script type="text/javascript">
		 alert("Invalid username or password");
		 window.location.href="login.php";
	</script>
 <?php
	 }
	 else
	 {
		  session_start();
		  $_SESSION['username']=$username;
  ?>
  <script type="text/javascript">
	  alert("Login Successfully");
	  window.location.href="home.php";
  
  
  </script>
  <?php
	  }
  
  }
  ?>