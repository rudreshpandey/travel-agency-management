<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/travelStyle2.css">
<title>
Vehical Searching
</title>
</head>
<body>
<div >
<div class="login"><a href="login.php">Login</a></div>
<div class="c1" >
				<a href="index.php">Home</a>
				<a  href="login.php">Book</a>
				<a   href="">Branch</a>
				<a  href="">How to Book</a>
	</div>
<div class="container">
<div style="border:2px solid white;padding-top:15%;">
<h1  >Where do you want to go?</h1>
<h4  style="font-family:Colonna MT;color:red;margin-top:-23px;">AGE IS NO Barrier WHEN IT COMES TO TRAVEL1</h4>

<form  action="/action_page.php" method="get" >
 <input  list="suggestions" name="departer places" placeholder="From">
  <datalist  id="suggestions">
    <option value="Allahbad">
    <option value="Lucknow">
    <option value="Kanpur">
    <option value="Varanasi">
    <option value="Gorakhpur">
	<input type="submit">
  </datalist>
  <input   list="suggestions" name="arrival places" placeholder="To" style="margin-left:80px;">
  <datalist id="suggestions">
    <option value="Allahbad">
    <option value="Lucknow">
    <option value="Kanpur">
    <option value="Varanasi">
    <option value="Gorakhpur">
  </datalist>
 
</form>

</div>
</div>
</div>

</body>
</html>
