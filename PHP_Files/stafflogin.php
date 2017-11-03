
<?php


function logon()
{
  $name = $_GET["uname"];
  $psw = $_GET["psw"];

  include 'db.php';

  $query = 'SELECT * FROM SupportStaff WHERE UserName = "'.$name.'" AND Password = "'.$psw.'"';
  $result = mysql_query($query);

  if(mysql_num_rows($result) == 1)
  {
    $cookie_name = "staffmember";
    $cookie_value = "valid";
    setcookie($cookie_name, $cookie_value, time() + 3600, "/");
    return 'loggedin';
  }
  else
  {
    $error = "Login details are invalid. Please go back.";
    return "$error";
  }
}



function printform()
{
  if($_GET["choice"] == "product") {
	return '<br />
		<br />
		<div id="res"></div>
		<form action="" id="adding">
			<label> Make: <input type="text" name="Make"> </label> </br>
			<label> Model: <input type="text" name="Model"> </label> </br>
			<label> Price: <input type="text" name="Price"> </label> </br>
			<label> Gender: <select name="Gender">
					<option> </option>
					<option> Mens </option>
					<option> Womens </option>
					</select> </label>
			<label> Type: <input type="text" name="Type"> </label> </br>
			<label> Colour: <input type="text" name="Colour"> </label> </br>
			<label> Exclusive to Discount Club Members?  <select name="DiscountClub">
					<option> </option>
					<option> Y </option>
					<option> N </option>
					</select> </label> </br>
			<label> Image Source: <input type="text" name="Image"> </label> </br>
			<label> Stock: <input type="text" name="Stock"> </label> </br>	
                        <input type="hidden" name="submit2" value="true" />
			<input type="reset" name="ResetButton" value="Reset" />
               		<input type="submit" name="Submit2" value="Submit"  />
	</form>';
  }

  if($_GET["choice"] == "customer") {
	return '<br />
		<br />

		<form id="member">
			<input type="text" id="User" />
			<br />
			<input type="button" name="Submit4" value="View" onclick="showUser(this.value);" />
			<br />
			<div id="txtHint"></div>
		</form>';
  }

  if($_GET["choice"] == "staff") {
	return '<br />
		<p> Hi Soon! </p>
		<br />';
  }

  return;

}



function addProduct()
{
	if(isset($_POST["Make"]))
	{
		$make = $_POST["Make"];
	}
	else {
		$make = null; }

	if(isset($_POST["Model"]))
	{
		$model = $_POST["Model"];
	}
	else {
		$model = null; }


	if(isset($_POST["Price"]))
	{
		$price = $_POST["Price"];
	}
	else {
		$price = null; }

	if(isset($_POST["Gender"]))
	{
		$gender = $_POST["Gender"];
	}
	else {
		$gender = null; }
	
	if(isset($_POST["Type"]))
	{
		$type = $_POST["Type"];
	}
	else {
		$type = null; }

	if(isset($_POST["Colour"]))
	{
		$colour = $_POST["Colour"];
	}
	else {
		$colour = null; }

	if(isset($_POST["DiscountClub"]))
	{
		$club = $_POST["DiscountClub"];	
	}
	else {
		$club = null; }

	if(isset($_POST["Image"]))
	{
		$image = $_POST["Image"];
	}
	else {
		$Image = null; }

	if(isset($_POST["Stock"]))
	{
		$stock = $_POST["Stock"];
	}
	else {
		$stock = null; }

	
	include 'db.php';

	$query = "INSERT INTO ProductList (MAKE, MODEL, PRICE, GENDER, TYPE, DISCOUNTCLUB, IMAGE, STOCK)
	VALUES ('$make', '$model', '$price', '$gender', '$type', '$club', '$image', '$stock')";

	$result = mysql_query($query);

	if ($result == null) {
    	echo  "Did not work!";
    	}
	else {
	echo "The entry was added";
	}

}
	





if((isset($_GET["uname"])) && (isset($_GET["psw"])))
{
  echo logon();
}

if(isset($_GET["choice"]))
{
  echo printform();
}

if(isset($_POST["submit2"]))
{
  echo addProduct();
}

?>
