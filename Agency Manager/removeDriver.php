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
<script> 
		document.getElementById("result1").style.display = "none";
		document.getElementById("result2").style.display = "none";
		function displayRadioValue() {
					
			var ele = document.getElementsByName("remove");	 
				if(ele[0].checked) 
				{
					var x = document.getElementById("result1");
					if (x.style.display === "none") {
						x.style.display = "block";
						document.getElementById("result2").style.display = "none";
					}
				}
				else if(ele[1].checked) 
				{
					var x = document.getElementById("result2");
					if (x.style.display === "none") {
						x.style.display = "block";
						document.getElementById("result1").style.display = "none";
					} 
				}
			}
	</script>
	
	
	
	
<div class="remove">
<h1>Remove Driver</h1>
</div>
<div >
<table class="remove">
	<tr>
	<td><h3><input type="radio" name="remove" value="name" checked>Search by name</h3></td>
	<td></td>
	<td><h3><input type="radio" name="remove" value="id">Search by id</h3></td>
	</tr>
	<tr>
	<td></td>
	<td ><button class="Button" type="button" onclick="displayRadioValue()">Proceed</button></td>
	</tr>
</table>
</div>

<div class="form_details1" >

<div id="result1" >
<form>
<table >
	<tr>
<td colspan="3">
<input type="text" name="Dname" placeholder=" Enter Driver name">
</td>
</tr>
<tr>
<td width="155px;"></td>
<td>

<input type="submit"  value="search" name="submit">
</td>
<td width="150px;"></td>
</tr>
</table>
</form>
</div>
<form>
<div id="result2" style="display:none">
<table  >
<tr>
<td colspan="3">
<input type="text" name="Did" placeholder=" Enter Driver ID">
</td>
</tr>
<tr>
<td width="155px;"></td>
<td>
<input type="submit" value="search" name="submit">
</td>
<td width="150px;"></td>
</tr>
</table>
</form>
</div>