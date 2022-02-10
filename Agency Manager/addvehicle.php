<?php

session_start();
	if($_SESSION['uid'])
	{
		;
	}
	else
		header("location:../login.php");
	include('../Owner/admintitle.php');
	include('../header.php');
	include('../dbconnection.php');?>

<fieldset class="form_details">
<legend>Enter Vehicle Route</legend>
<form  method="post" action="addvehicle.php">
<table >
<tr>
	<td>Vehicle Number:</td>
	<td><input type="text" name="VehicleNumber" placeholder=" Enter Vehicle Number " required>  </td>
</tr>
<tr>
	<td>Origin:</td>
	<td><input type="text" list="suggestions" name="stop1" placeholder=" Enter stoppage Origin" required>    
	<datalist  id="suggestions">
	
	<?php
	
	$qry = "SELECT place_name FROM place";
	$run = mysqli_query($con,$qry);
	
	while($place = mysqli_fetch_assoc($run))
	{
		echo "<option value='".$place['place_name']."'>";
	}
	
	
	?>
  </datalist>
	</td>
	<td>Arrival time:</td>
	<td><input type="text" name="arrtime1" placeholder=" Enter arrival time" required> </td>
</tr>
<tr>	
	<td>Stopage 1:</td>
	<td><input type="text" list="suggestions" name="stop2" placeholder=" Enter stoppage 1" required>	
	</td>
	<td>Arrival time:</td>
	<td><input type="text" name="arrtime2" placeholder=" Enter arrival time" required>  </td>
</tr>
<tr>
	<td>Stopage 2:</td>
	<td><input type="text" list="suggestions" name="stop3" placeholder=" Enter stoppage 2" required>	</td>
	<td>Arrival time:</td>
	<td><input type="text" name="arrtime3" placeholder=" Enter arrival time" required>    </td>
	
	
</tr>
<tr>
	<td>Stopage 3:</td>
	<td><input type="text" list="suggestions" name="stop4" placeholder=" Enter stoppage 3" required></td>
	<td>Arrival time:</td>
	<td><input type="text" name="arrtime4" placeholder=" Enter arrival time" required>    </td>
</tr>
<tr>
	<td>Destination:</td>
	<td><input type="text" list="suggestions" name="stop5" placeholder=" Enter stoppage Destination" required></td>
	<td>Arrival time:</td>
	<td><input type="text" name="arrtime5" placeholder=" Enter arrival time" required>    </td>
</tr>

<tr>
<td></td>
	<td colspan="2"><input type="submit" name="addvec" value="Add Vehicle" ></td>
<tr>
</form>
</fieldset>


<?php
if(isset($_POST['addvec']))
{
	$vecno =$_POST['VehicleNumber'];
	$qry = "INSERT INTO abc (vehicleNo) VALUES ('$vecno')";
	$run = mysqli_query($con,$qry);
	$qry = "INSERT INTO time (vehicleNo) VALUES ('$vecno')";
	$run = mysqli_query($con,$qry);
	$qry = "INSERT INTO route (vehicleNo) VALUES ('$vecno')";
	$run = mysqli_query($con,$qry);
	
	$stop[1] =$_POST['stop1'];
	$stop[2] =$_POST['stop2'];
	$stop[3] =$_POST['stop3'];
	$stop[4] =$_POST['stop4'];
	$stop[5] =$_POST['stop5'];
	
	$time[1] =$_POST['arrtime1'];
	$time[2] =$_POST['arrtime2'];
	$time[3] =$_POST['arrtime3'];
	$time[4] =$_POST['arrtime4'];
	$time[5] =$_POST['arrtime5'];
	
	for($i=1;$i<=5;$i++){
	$qry = "UPDATE abc SET $stop[$i] = '1' WHERE vehicleNo = '$vecno' ";
	$run = mysqli_query($con,$qry);
	$qry = "UPDATE route SET stop$i = '$stop[$i]' WHERE vehicleNo = '$vecno' ";
	$run = mysqli_query($con,$qry);
	$qry = "UPDATE time SET stop$i = '$time[$i]' WHERE vehicleNo = '$vecno' ";
	$run = mysqli_query($con,$qry);
	
	}
	
}





?>




</body>
</html>