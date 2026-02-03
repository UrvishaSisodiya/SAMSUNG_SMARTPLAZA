<?php include("session.php");?>
<?php
include("con1.php");
$id=$_GET['id'];
$query="delete from login where id=".$id;
$result=mysqli_query($con,$query);
if($result==NULL)
{?>
<script>
alert ("Record Not Deleted");
window.location="loginmaster.php";
</script>
<?php
	
}
else
{
	header("location:loginmaster.php");
}
?>
