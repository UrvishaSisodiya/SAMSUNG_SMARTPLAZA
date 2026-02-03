<!DOCTYPE html><head>   
    <title>Samsung SmartPlaza</title>   
</head>

<body>
 <style>
  body {
    background-image:url('project_image/bg/d8.jpg');
    background-repeat:no-repeat;
    background-size:cover;
    background-attachment: scroll; 
    margin: 0;
    padding: 0;
  }
</style>
<table align="center" >
<tr>
   <td>
     <ul>
	   <h1 class="f1"><font color="#000000" style=" font-size:100px;text-shadow: 1px 1px 2px black, 0 0 25px #DB7093, 0 0 5px #CC7A8B;">Samsung SmartPlaza</font></h1>
     </ul>
   </td>
</tr>
</table>
<?php
?>
</body>
</html></body>
</html>
<a href="home.php"><h1><b>Home</b></h1></a>  
<?php
include("con1.php");
$query="select *from item";
$result=mysqli_query($con,$query);
echo "<table bgcolor='#CCCCCC'cellpadding='4' style = 'font-style:bold; color:black;font-size:20px;' class='tbl' align='center' cellspacing='2' border='5' ><tr class='th1'>

<h1 align='center'><font color='#CC7A8B' size='+5'><u> ITEM MASTER </u></font></h1>

<th><font color='#CC6666'size='+3'><ul>Id</font></ul></th>
<th><font color='#CC6666'size='+3'><b><ul>Itemname</font></ul></th>
<th><font color='#CC6666'size='+3'><b><ul>Category</font></ul></th>
<th><font color='#CC6666'size='+3'><b><ul>Price</font></ul></th>
<th><font color='#CC6666'size='+3'><b><ul>Image</font></ul></th>
<th><font color='#CC6666'size='+3'><b><ul>Edit</font></ul></th>
<th><font color='#CC6666'size='+3'><b><ul>Delete</font></ul></th>";
while($row=mysqli_fetch_array($result))
{
echo"<tr><td>";
echo $row["id"];
echo "</td><td>";
echo $row["itemname"];
echo "</td><td>";
echo $row["category"];
echo "</td><td>";
echo $row["price"];
echo "</td><td>";
echo "<img src='project_image/$row[4]' height=60 width=60 style='margin-left:5px'>";    
echo "</td><td><a href='itemedit.php? id=".$row[0]."'><ul><img src='project_image/edit_icon.png'/></ul></a></td>

      <td><a href='itemdelete.php?id=".$row[0]."'><ul><img src='project_image/deleteicon.png'/></ul></a></td>";
}


echo"</tr>";
echo"<br>";
echo"<td colspan='10' align='center'><a href='iteminsert.php?id=".$row[0]."'><h1><font color='#CC7A8B'><ul> Insert New Item </ul></font></h1></a></td>";


echo"</table>";
?>

<?php include("footer.php"); ?>




	