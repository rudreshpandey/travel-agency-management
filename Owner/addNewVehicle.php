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
<fieldset class="form_details">
<legend>Enter Vehicle Details</legend>
<form  method="post" action="">
<table >
<tr>
	<td>Vehicle Number:</td>
	<td><input type="number" name="VehicleNumber" placeholder=" Enter Vehicle Number " />  </td>
	<td></td>
	<td>Vehicle Company:</td>
	<td><input type="text" name="VehicleCompany" placeholder=" Enter Vehicle Company" />    </td>
</tr>
<tr>	
	<td>Model Type:</td>
	<td><input type="text" name="ModelType" placeholder=" Enter Model Type" />	</td>
	<td></td>
	<td>Date of Purchase:</td>
	<td><input type="date" name="DPurchase" placeholder=" Purchase Date" />	</td>
	
	
</tr>
<tr>
	<td>Registration Number:</td>
	<td><input type="text" name="RegNumber" placeholder=" Enter Registration Number" />	</td>
	<td></td>
	<td>Mileage:</td>
	<td><input type="text" name="Mileage" placeholder=" Enter Mileage" /></td>
</tr>

<tr>
	<td></td>
	<td></td>
	<td ><input type="submit"  align="center"></td>
<tr>
</form>
</fieldset>