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
	
<form class="form_details" method="post" action="">
Stopage Name:
<input type="text" name="stop" placeholder=" Add Stoppage" >
<input type="submit" value="Add" name="add_stop">
</form>


</body>
</html>

<?php
if(isset($_POST['add_stop']))
{
	include '../dbconnection.php';
	$new_place = $_POST['stop'];
	$qry = "SELECT id FROM place WHERE place_name = '$new_place'";
	$run = mysqli_query($con,$qry);
	$result_row = mysqli_num_rows($run);
	if($result_row)
		echo "Stoppage is available.";
	else
	{
		$qry = "INSERT INTO place (place_name) VALUES ('$new_place')";
		$run = mysqli_query($con,$qry);
		$qry = "ALTER TABLE `abc` ADD `$new_place` TINYINT(1) NOT NULL DEFAULT '0'";
		$run = mysqli_query($con,$qry);
		echo "Stoppage added Successfully";
	}
}


?>