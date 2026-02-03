<!DOCTYPE html>
<head>
    <title>Samsung SmartPlaza</title>
</head>

<body background="project_image/bg/d8.jpg" height="100px" width="300px">
<table align="center">
	<tr>
		<td><ul>
		<br>
		<h1 class="f1"><font color="#000000" style=" font-size:100px;
			  text-shadow: 1px 1px 2px black, 0 0 25px #DB7093, 0 0 5px #CC7A8B;">Samsung SmartPlaza</font></h1>
		</ul></td>
	</tr>
</table>    
<a href="home.php"><h1><b>Home</b></h1></a>
<?php
	include("con1.php");
	$query="select * from addtocart";
	$result=mysqli_query($con,$query);
	echo"<table align='center' border='5'bgcolor='#CCCCCC' >
	<h1 align='center'><font color='#CC7A8B' size='+5'><u> ADD TO CART MASTER </u></font></h1>
	<th><font color='#CC6666' size='+2'><ul>Id</ul></font> </th>
	<th><font color='#CC6666' size='+2'><ul>Itemname</font></ul></th>
	<th><font color='#CC6666' size='+2'><ul>Price</font></ul></th>
	<th><font color='#CC6666' size='+2'><ul>Quantity</font></ul></th>
	<th><font color='#CC6666' size='+2'><ul>Total</font></ul></th>
	<th><font color='#CC6666' size='+2'><ul>Image</font></ul></th>
	<th><font color='#CC6666' size='+2'><ul>Username</font></ul></th>
	<th><font color='#CC6666' size='+2'><ul>Cart_Date</font></ul></th>
	<th><font color='#CC6666' size='+2'><ul>Delete</font></ul></th>";
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr><td>";
		echo $row["id"];
		echo "</td><td>";
		echo $row["itemname"];
		echo "</td><td>";
		echo $row["price"];
		echo "</td><td>";
		echo $row["quantity"];
		echo "</td><td>";
		echo $row["total"];
		echo "</td><td>";
		echo $row["image"];
		echo "</td><td>";
		echo $row["username"];
		echo "</td><td>";
		echo $row["cart_date"];
		echo "</td><td><a href='addtocartdelete.php?id=".$row[0]."'><ul><img src='project_image/deleteicon.png'/></ul></a></td>";
	}
	echo"</tr></table>";
?>
<?php include("footer.php"); ?>

   </font>
  </body>
</html>
