<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/travelStyle.css">
<title>
Vehical Searching
</title>
</head>
<body>
<div >
	<div style="margin-left:45%"><a class="c1" href="index.php">Home</a>
	<a class="c1" href="login.php">Book</a>
	<a class="c1"  href="">Branch</a>
	<a class="c1" href="">How to Book</a>
	<a class="c2" href="login.php">Login</a>
	</div>
<div class="container">
<img src="image\img2.jpg" alt="AGE IS NO BAARRIER WHET IT COMES TO TRAVEL...." style="margin-top:10px;width:100%;height:100%;z-index:-1;">
</div>
<h1 class="centered" ><strong>Where do you want to go?</strong></h1>
<h3 class="centered1" style="font-family:Colonna MT;"><small>AGE IS NO Barrier WHEN IT COMES TO TRAVEL1</h3>
<form action="/action_page.php" method="get" >
 <input  class="centered2" list="suggestions" name="departer places" placeholder="From">
  <datalist  id="suggestions">
    <option value="Allahbad">
    <option value="Lucknow">
    <option value="Kanpur">
    <option value="Varanasi">
    <option value="Gorakhpur">
  </datalist>
  <input class="centered3"   list="suggestions" name="arrival places" placeholder="To">
  <datalist id="suggestions">
    <option value="Allahbad">
    <option value="Lucknow">
    <option value="Kanpur">
    <option value="Varanasi">
    <option value="Gorakhpur">
  </datalist>
</form>

</body>
</html>
