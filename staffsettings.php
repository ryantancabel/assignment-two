<!DOCTYPE html>
/*
<?php

	session_start();

	if(!isset($_SESSION['validated']) || ($_SESSION['validated'] == false))
	{
		header("Location: stafflogin.php");
	}

?>
*/
<html>
<head>
<style>
#adding {
	display:none;
}
#member {
	display:none;
}
</style>
</head>
<body>

	<p>Welcome to Staff Program </p>

	<p> Choose an option </p>

	<select id="choose" name="choose" onchange="showhide()">
		<option value=""> </option>
		<option value="product"> Add or modify a  product to the product list </option>
		<option value="customer"> Access of modify customer information </option>
		<option value="staff"> Create a new customer Account </option>
	</select>

	<a href='logout.php'> Log Out </a>


	<script src="javascriptstaff.js">
	</script>

	<form action="add.php" method="post" id="adding">
		<label> Make: <input type="text" name="Make"> </label> </br>
		<label> Model: <input type="text" name="Model"> </label> </br>
		<label> Price: <input type="text" name="Price"> </label> </br>
		<label> Gender: <select name="Gender">
				<option> </option>
				<option> Mens </option>
				<option> Womens </option>
				<option> Unisex </option>
				</select> </label>
		<label> Type: <select name="Type">
				<option> </option>
				<option> Running </option>
				<option> Dress </option>
				<option> Heel </option>
				<option> Casual </option>
				<option> Sandal </option>
				</select> </label> </br>
		<label> Colour: <input type="text" name="Colour"> </label> </br>
		<label> Exclusive to Discount Club Members?  <select name="DiscountClub">
				<option> </option>
				<option> Yes </option>
				<option> No </option>
				</select> </label> </br>
		<label> Image Source: <input type="text" name="Image"> </label> </br>
		<label> Description: <textarea name="Description" rows="10" cols="30"> </textarea>  </label> </br>
		<label> Stock: <input type="text" name="Stock"> </label> </br>
		<input type="reset" name="ResetButton" value="Reset" />
                <input type="submit" name="Submit2" value="Submit" />
	</form>


</form>

<br />
<br />

<form id="member">
<input type="text" id="User" />
<br />
<input type="button" name="Submit4" value="View" onclick="showUser(document.getElementById('User').value);" />
<br />
<div id="txtHint"></div>
</form>
<br />

<br />




</html>
