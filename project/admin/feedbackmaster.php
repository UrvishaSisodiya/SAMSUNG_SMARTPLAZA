 

<!DOCTYPE html>
<head>
	<title>Sumsang SmartPlaza</title>
</head>

<body background="project_image/bg/d8.jpg" height="100px" width="300px"> 
<table align="center">
<tr>
<td><ul>
<br>
<h1 class="f1"><font color="#000000" style=" font-size:100px;
  text-shadow: 1px 1px 2px black, 0 0 25px #DB7093, 0 0 5px #CC7A8B;">Sumsang SmartPlaza</font></h1>
</ul></td>


</tr>
</table>				
    <a href="home.php"><h1><b>Home</b></h1></a>  
<?php
include("con1.php");
$query="select * from feedback";
$result=mysqli_query($con,$query);

echo"<table border='5' align='center'bgcolor='#CCCCCC'>
<h1 align='center'><font color='#CC7A8B' size='+5'><u> FEEDBACK MASTER </u></font></h1>
<th><font color='#CC6666' size='+2'><ul >Id </font></ul></th>
<th><font color='#CC6666'  size='+2'><ul> Name </font></ul></th>
<th><font color='#CC6666'  size='+2'><ul> City </font></ul></th>
<th><font color='#CC6666'  size='+2'><ul> Mo.no </font></ul></th>
<th><font color='#CC6666'  size='+2'><ul> Email </font></ul></th>
<th><font color='#CC6666'  size='+2'><ul> Feedback </font></ul></th>
<th><font color='#CC6666'  size='+2'><ul> Delete </font></ul></th>";
while($row=mysqli_fetch_array($result))
{
echo"<tr><td>";
echo $row["id"];
echo "</td><td>";
echo $row["name"];
echo "</td><td>";
echo $row["city"];
echo "</td><td>";
echo $row["mobileno"];
echo "</td><td>";
echo $row["email"];
echo "</td><td>";
echo $row["feedback"];     
echo"</td>
<td><a href='feedbackdelete.php? id=".$row[0]."'><ul> <img src='project_image/deleteicon.png'/></ul></a></td>";
}
echo"</tr></table>";
?>


<?php include("footer.php"); ?>

</body>
</html>




