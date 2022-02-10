<?php

session_start();
	if($_SESSION['uid'])
	{
		;
	}
	else
		header("location:../login.php");
	include('admintitle.php');
	include('../header.php');?>
<div class="form_details">
<form >
<a href="addManager.php" >add manager</a>
<a href="addNewVehicle.php">add vehical</a> 
<a href="removeVehicle.php">Remove vehicle</a>  
<a href="">change password</a>  
<a href=""></a>  
</form>
</div>
</body>
</html>