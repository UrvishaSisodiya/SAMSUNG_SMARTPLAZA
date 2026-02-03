<html>
<head>
<title>Samsung SmartPlaza</title>
</head>

<script type="text/javascript">
  function validateForm()
  {
     var a=document.forms["login"]["username"].value;
	 var b=document.forms["login"]["password"].value;
	 
	 if((a==null ||a="")&&(b==null ||b=""))
	 
	 if(a==null ||a=="")
	 {
	   alert("username must be filled out.");
	   return false;
	 }
	 if(b==null ||b=="")
	 {
	  	alert("password must be filled out.");
		return false;
	 }
	 if(b.length<5)
	 {
	 	alert("password should be atleast 5 character.");
		return false;
	 }
	 if(!(b.match(/^[a-z,0-9][\w-]*$/i)))
	 {
	 	alert("password can not contain any special character or spaces except'_'or '-' .");
		return false;
	 }

  }

</script>

<body background="project_image/bg/d8.jpg" height="100px" width="300px">
<table align="center">
	<tbody>
	<tr>
		<td>
		  <ul>
		      <br>
			  <h1 class="f1">
			  <font color="#000000" style="font-size:120px; text-shadow:1px 1px 2px black,0 0 25px #DB7093,0 0 5px #CC7A8B;">Samsung SmartPlaza</font>
			  </h1>
		  </ul>
		</td>
	</tr>
	</tbody>
</table>
<center><br>
<img src="project_image/bg/admin1.png" height="250" width="250"></img>
<br><br><br><br>
	<h1 align="center">
		<font color="#CC7A8B"size="+6">
		     <b><u>LOGIN</u></b>
	    </font>
	</h1>
   <form action="checklogin.php" method="post" name="login" onSubmit="return validateForm()">
     <font size="+2" color="#3333CC">
	 	<table align="center" size="80%" style="display:flex; justify-content: center;">
		  <tbody>
		   <tr>
              <td> <font size="+3" color="#CCCCCC"><b>Username:</b> </font> </td>
		      <td><input type="text" id="phone" name="username"style="height:25px;"></td>
		   </tr>
		   <tr>
		   		<td><font size="+3" color="#CCCCCC"><b>Password  :</b></font></td>
				<td><input type="password" id="phone" name="password"style="height:25px;"></td>
		   </tr>
		   <tr>
		   		<td colspan="2" align="center"></td>
		   </tr>
		   <tr>
		       <td align="center" bgcolor="#CC7A8B">
		            <input  name="Submit" type="submit" value="Login"style="height:30px;">
		       </td>
		       <td align="center" bgcolor="#CC7A8B">
		           <input name="reset" type="reset" value="Cancel"style="height:30px;">
		       </td>
		   </tr>	
		 </tbody>
	   </table>
	</font>
  </form>
</center><br><br>
<?php include("footer.php");?>
</body>
</html>
