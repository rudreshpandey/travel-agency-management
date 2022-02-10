<?php

session_start();
	if($_SESSION['uid'])
	{
		;
	}
	else
		header("location:../login.php");
	include('../Owner/admintitle.php');
	include('../header.php');?>
<fieldset class="form_details">
<legend>Enter Booking Manager Details</legend>
<form  method="post" action="" enctype="multipart/form-data">
<table >
<tr>
	<td>Name:</td>
	<td><input type="text" name="bmname" placeholder="Enter name " />  </td>
	<td></td>
	<td colspan="2">Image:<br>
	<input type="file" name="img"></td>
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
	<td ><input type="submit"  name="upload" align="center"></td>
<tr>
</form>
</fieldset>

</body>
</html>
<?php
if(isset($_POST['upload']))
{
	include("../dbconnection.php");
	$name = $_POST['bmname'];
	$imgname = $_FILES['img'];
	$dob = $_POST['dob'];
	$Paddress = $_POST['Padd'];
	$Caddress = $_POST['Cadd'];
	$contact =$_POST['contact'];
	$experience =$_POST['exper'];
	
	$qry = "INSERT INTO `bookingmanager`(`name`, `dob`, `paddress`, `caddress`,`contact`, `experience`) VALUES ('$name','$dob','$address','$contact','$experience')";
	move_uploaded_file($_FILES['img']['tmp_name'],"C:/xampp/images/".$name);
	$run = mysqli_query($con,$qry);
	if($run)
	{
		"<script> alert('Driver added succesfully')</script>";
	}
}
?>