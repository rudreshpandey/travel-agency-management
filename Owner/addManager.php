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
<legend>Enter Branch Manager Details</legend>
<form  method="post" action="">
<table >
<tr>
	<td>Name:</td>
	<td><input type="text" name="name" placeholder="Enter name " />  </td>
	<td></td>
	<td>Branch name:</td>
	<td><input type="text" name="bName" placeholder="Enter Branch name" />    </td>
</tr>
<tr>	
	<td>Date of Birth:</td>
	<td><input type="date" name="dob" placeholder="Enter DOB" />	</td>
	<td></td>
	<td>Experience(in years):</td>
	<td><input type="number" name="exper" placeholder="Experience(in Yrs)" />	</td>
	
	
</tr>
<tr>
	<td>Permanent address:</td>
	<td><input type="text" name="Padd" placeholder="Enter Permanent address" />	</td>
	<td></td>
	<td>Correspondence address:</td>
	<td><input type="text" name="Cadd" placeholder="Enter Correspondence address" /></td>
</tr>
<tr>
	<td>Contact No.:</td>
	<td><input type="text" name="contact" placeholder="Enter Contact No." />	</td>
	<td></td>
	<td>Alternate Contact:</td>
	<td><input type="text" name="Altcontact" placeholder="Enter Alt Contact No." />	</td>
	
</tr>
<tr>
	<td></td>
	<td></td>
	<td ><input type="submit"  align="center"></td>
<tr>
</form>
</fieldset>
