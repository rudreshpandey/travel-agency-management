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
	
<form>
<a href="addDriver.php">Add Driver</a>
<a href="addBookingManager.php">Add Booking Manager</a>
<a href="removeDriver.php">Remove Driver</a>
<a href="addNewStoppage.php">Add new Stopage</a>
<a href="addvehicle.php">Add new Vechile</a>
<a href="">Change Timing of vechile</a>
<a href="">Change route</a>


</form>