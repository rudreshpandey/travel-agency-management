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
<div>
<fieldset class="form_details1" >
<legend>Remove Vehicle </legend>
<form  method="post" action="">

	<b>Vehicle Number:<b>
	<input type="number" name="VehicleNumber" placeholder=" Enter Vehicle Number " /> 

</form>
</fieldset>
</div>