<?php

session_start();
	if($_SESSION['uid'])
	{
		if($_SESSION['usertype']=="Owner")
			header('location:Owner/ownerdasboard.php');
		else if($_SESSION['usertype']=="Manager")
			header('location:Agency Manager/dashboard.php');
		else if($_SESSION['usertype']=="Booking Manager")
			header('location:.php');
		else
			header('location:.php');
	}
	
	?>
<html>
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" href="css/loginStyle.css">
</head>
<body>



<div class="container">
<form method="post" action="">
<b>User Type:</b>  <br>
<select name='utype' required>
<option value="">Select your user type</option>
<option value="Owner">Owner</option>
<option value="Manager">Manager</option>
<option value="Booking Manager">Booking Manager</option>
<option value="user">User</option>
</select> <br><br>
<b>Username:</b><br>
<input class="class1" type="text" name="uname" placeholder="Enter user name" required>  <br><br>
<b>Password:</b><br>
<input class="class1" type="password" name="pass" placeholder="Enter your password" required>  <br><br>
<b><input class="Button" type="submit" name="login" value="Login" /> </b><br>
<br>
Forgot password ?<br>

<h2><span>or</span></h2>


New User 
<b><a  href="register.php" >Register Now!</a> </b>

<form>
</div>

</body>
</html>
<?php

if(isset($_POST['login']))
{
	$utype = $_POST['utype'];
	$uname = $_POST['uname'];
	$upass = $_POST['pass'];

	include("dbconnection.php");
	$qry = "SELECT * FROM `login_table` WHERE `usertype`='$utype' AND `username`='$uname' AND `userpass`='$upass'";
	$run = mysqli_query($con,$qry);
	$row = mysqli_num_rows($run);
	if($row<1)
	{
		echo '<script>alert("Please enter a valid credential!");</script>';
	}
	else
	{
		$data = mysqli_fetch_assoc($run);
		$id = $data['id'];
		$name = $data['username'];
		$type = $data['usertype'];
		session_start();
		$_SESSION['uid']=$id;
		$_SESSION['username']= $name;
		$_SESSION['usertype']= $type;
		if($data['usertype']=="Owner")
			header('location:Owner/ownerdasboard.php');
		else if($data['usertype']=="Manager")
			header('location:Agency Manager/dashboard.php');
		else if($data['usertype']=="Booking Manager")
			header('location:.php');
		else
			header('location:.php');
	}
			
}
?>
		



