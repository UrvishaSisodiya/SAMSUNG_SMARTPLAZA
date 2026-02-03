<!DOCTYPE html>
  <head>
     <title>Samsung SmartPlaza</title>
  </head>

	<script type="text/javascript">
	function validateForm()
	{
		var a=document.forms["login"]["username"].value;                 
		var b=document.forms["login"]["password"].value;

		if ((a==null || a=="") && (b==null || b=="")

		if (a==null || a=="")
		{
			alert("username must be filled out");
			return false;
		}
		if (b==null || b=="")
		{
			alert("password must be filled out");
			return false;
		}
		if(b.length<10)
		{
			alert("password should be atleast 10 characters.");
			return false;
		}
		if(!(b.match(/^[a-z,0-9][\w-]*$/i)))
		{
			alert("Password can not contain any special character or spaces except '_' or '-' . ");
			return false;
		}
	}
	</script>

<body background="project_image/bg/d8.jpg" height="100px" width="300px">
 
	<table align="center">
	  <tr>
		<td><ul>
		<br>
		<h1 class="f1"><font color="#000000" style=" font-size:100px; text-shadow:
		   1px 1px 2px black, 0 0 25px #DB7093, 0 0 5px #CC7A8B;">Samsung SmartPlaza</font></h1>
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
	$query="select * from login where id=$id";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
?>
	<br>
	<br>
	<br><br>
	<form action="logineditsave.php" method="post" enctype="multipart/form-data"
		name="login" onSubmit="return validateForm()">
   
	<h1 align="center"><font size="+6" color="#CC7A8B"><b><u> Admin Login </u></b></font></h1>

	<table align="center" height="200" width="300">
	  <tr>
		<td><font size="+3" color="#CCCCCC"><b> Id </td>
		<td><input type="text" name="id"  value="<?php echo $row['0'];?>"style="height: 20px;"></td>
	  </tr><br>
	  <tr>
		<td><font size="+3" color="#CCCCCC"><b> Username </b></font></td>
		<td><input type="text" name="username" value="<?php echo $row['1'];?>"style="height: 20px;"></td>
      </tr>
	  <tr>
		<td><font size="+3" color="#CCCCCC"><b> Password </b></font></td>
		<td><input type="password" name="password" value="<?php echo $row['2'];?>"style="height: 20px;"></td>
	  </tr>

	  <tr>
			<td align="center" bgcolor="#CC7A8B" colspan="+2"><input name="submit" type="submit" value="UPDATE"style="height:30px;"> 
     		 </td>
   	  </tr>
	</table>
	<br><br><br><br><br><br><br><br><br><br><br><br>
	<?php include("footer.php"); ?>
</form>

<?php
	}
?>

   </body>
</html>

