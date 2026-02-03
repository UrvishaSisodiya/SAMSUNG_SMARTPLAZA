 <html>
<head>
    <title>Samsung SmartPlaza</title>
</head>
	<script type="text/javascript">
function validateForm()
{
var a=document.forms["itm"]["itemname"].value;
var b=document.forms["itm"]["category"].value;
var c=document.forms["itm"]["price"].value;
var d=document.forms["itm"]["im"].value;

if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d==""))

{
alert("All Field must be filled out");
return false;	
}
if (a==null || a=="")
{
alert("itemname must be filled out");
return false;
}
if (b==null || b=="")
{
alert("category must be filled out");
return false;
}
if (c==null || c=="")
{
alert("price must be filled out");
return false;
}
if (d==null || d=="")
{
alert("image must be filled out");
return false;
}		
}
</script> 
  
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
    <script type="text/javascript"> 
    $(function() {
        var Page = (function() {
            var $navArrows = $( '#nav-arrows' ),
            slitslider = $( '#slider' ).slitslider( {
                autoplay : true
            } ),
            init = function() {
                initEvents();
            },
            initEvents = function() {
                $navArrows.children( ':last' ).on( 'click', function() {
                    slitslider.next();
                    return false;
                });
                $navArrows.children( ':first' ).on( 'click', function() {
                    slitslider.previous();
                    return false;
                });
            };
            return { init : init };
        })();
        Page.init();
    });
    </script>
    


<?php
include("con1.php");
$id=$_GET['id'];
$query="select * from item where id=$id";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
?>
<br><br><br>
<form action="itemeditsave.php" method="post" enctype="multipart/form-data">

<h1 align="center"><font color='#CC7A8B' size='+5'><u> ITEMS EDIT </u></font></h1>
<table align="center" height="300" width="400" >
<tr>
<td><font color='#CCCCCC' size='+3'> Id </font></td>
<td><input type="text" name="id"value="<?php echo $row['0'];?>"style="height:25px;"></td>
</tr>
<tr>
<td><font color='#CCCCCC' size='+3'> Itemname </font></td>
<td><input type="text" name="itemname" value="<?php echo $row['1'];?>"style="height:25px;"></td>
</tr>

<tr>
<td> <font color='#CCCCCC' size='+3'> Category</td>
<td><select name="category" value="<?php echo $row['2'];?>"style="height:25px;">
          <option>--SELECT--</option>
          <option>Smartphone</option>
          <option>Smartwatch</option>
          <option>Laptop</option>
		  <option>Buds</option>
		  <option>TV</option>
		  <option>Fridge</option>
		  <option>Washing Machine</option>
		  <option>Micro Wave</option>
		  <option>Camera</option>
		  <option>Speaker</option>
		  <option>Tablet</option>
		  <option>Others</option>
        </select> 
  
        </select> </td>
</tr>

<tr>
<td><font color='#CCCCCC' size='+3'> Price </font></td>
<td><input type="text" name="price" value="<?php echo $row['3'];?>"style="height:25px;"></td>
</tr>
<tr>
<td><font color='#CCCCCC' size='+3'> Image </font></td>
<td><input type="file" name="im" value="<?php echo $row['4'];?>"style="height:25px;"></td>
</tr>
<tr>
<td  align="center" bgcolor="#CC7A8B">
        <input name="submit" type="submit" value="update" style="height:30px;">
       
</td>
<td  align="center" bgcolor="#CC7A8B">
      <input name="reset" type="reset" value="Cancel"style="height:30px;">
</td>
</tr>
</table>
<br><br></center>

 
</form>
<br><br><br><br><br><br><br><br><br>
<?php
}
?>

<?php include("footer.php"); ?>
</body>
</html>


	