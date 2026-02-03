 <!DOCTYPE html>
	<head>
  	  <title>Sumsung SmartPlaza</title>
	</head>
	<body background="project_image/bg/d8.jpg" height="100px" width="300px"> 
		<table align="center">
		 <tr>
			<td><ul>
				<br>
				<h1 class="f1"><font color="#000000" style="font-size:120px; text-shadow:1px 1px 2px black,0 0 25px #DB7093,0 0 5px #CC7A8B;">Samsung SmartPlaza</font>
			  </h1>
			</ul></td>
		  </tr>
		</table>
    	<a href="home.php"><h1><b> Home </b></h1></a>  
    
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
	$query="SELECT * FROM `login` ";
	$result=mysqli_query($con,$query);

	echo"<table border='5' align='center' bgcolor='#CCCCCC' >
	<h1 colspan='1' align='center'><font color='#CC7A8B' size='+5'><u> LOGIN MASTER </u></font></h1>
	<th><font color='#CC6666' size=+2><ul>Id</font></ul></th>
	<th><font color='#CC6666' size=+2><ul>Username</font></ul></th>
	<th><font color='#CC6666' size=+2><ul>Password</font></ul></th>
	<th><font color='#CC6666' size=+2><ul>Edit</font></ul></th>
	<th><font color='#CC6666' size=+2><ul>Delete</font></ul></th>";
	while($row=mysqli_fetch_array($result))
	{
		echo"<tr><td>";
		echo $row["id"];
		echo "</td><td>";
		echo $row["username"];
		echo "</td><td>";
		echo $row["password"];
		echo "</td><td><a href='loginedit.php? id=".$row[0]."'><ul><img src='project_image/edit_icon.png'/></ul></b></a></td>
		   <td><a href='logindelete.php?id=".$row[0]."'><b><ul><img src='project_image/deleteicon.png'></img> </ul></b></a></td>";
	}
	echo"</tr>";
	echo"<td colspan='10' align='center'><a href='logininsert.php?id=".$row[0]."'><font color='#CC7A8B' size=+3><b><ul> Insert New Admin </ul></font></a></td>";
	echo"</table><br><br><br>";
?>

<?php include("footer.php"); ?>

		</font>
	</body>
</html>
