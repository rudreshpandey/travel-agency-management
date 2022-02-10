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
<legend >Enter Driver Details</legend>
<form  method="post" action="">
<table >
<tr>
	<td>Name:</td>
	<td><input type="text" name="dname" placeholder="Enter name of Driver" required>  </td>
	<td></td>
	<td>Blood Group:</td>
	<td><select name="Blood_group" required>
<option name="">Select</option>
<option name="A+">A+</option>
<option name="A-">A-</option>
<option name="B+">B+</option>
<option name="B-">B-</option>
<option name="AB+">AB+</option>
<option name="AB-">AB-</option>
<option name="O+">O+</option>
<option name="O-">O-</option>
</select>			</td>
</tr>
<tr>	
	<td>Date of Birth:</td>
	<td><input type="date" name="dob" placeholder="Enter DOB" required>	</td>
	<td></td>
	<td>Address:</td>
	<td><input type="text" name="add" placeholder="Enter address" required>	</td>
</tr>
<tr>
	<td>Driving Licence No.:</td>
	<td><input type="text" name="Dl" placeholder="Enter Driving licence No." required></td>
	<td></td>
	<td>Experience(in years):</td>
	<td><input type="number" name="exper" placeholder="Experience(in Yrs)" required>	</td>
</tr>
<tr>
	<td>Contact No.:</td>
	<td><input type="text" name="contact" placeholder="Enter Contact No." required>	</td>
	<td></td>
	
</tr>
<br>
<tr>
<td></td>
<td></td>
<td ><input type="submit" name="upload" align="center"></td>
<td></td>
<tr>
</form>
</fieldset>

</body>
</html>
<?php
if(isset($_POST['upload']))
{
	include("../dbconnection.php");
	$name = $_POST['dname'];
	$dob = $_POST['dob'];
	$Blood = $_POST['Blood_group'];
	$Dl = $_POST['Dl'];
	$address = $_POST['add'];
	$contact =$_POST['contact'];
	$experience =$_POST['exper'];
	
	$qry = "INSERT INTO `driver`(`name`, `dob`, `blood`, `Dl`, `address`, `contact`, `experience`) VALUES ('$name','$dob','$Blood','$Dl','$address','$contact','$experience')";

	$run = mysqli_query($con,$qry);
	if($run)
	{
		"<script> alert('Driver added succesfully')</script>";
	}
}
?>