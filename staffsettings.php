<?php

echo "</br> <p>Welcome to Staff Program </p>\n</br>";

echo "<p> Add a product to the ProductList </p>"
?>

<html>

	<form action="staffsettings.php" method="post">
		<label> Make: <input type="text" name="Make"> </label> </br>
		<label> Model: <input type="text" name="Model"> </label> </br>
		<label> Price: <input type="text" name="Price"> </label> </br>
		<label> Gender: <select name="Gender">
				<option> Mens </option>
				<option> Womens </option>
				<option> Unisex </option>
				</select> </label>
		<label> Type: <select name="Type">
				<option> Running </option>
				<option> Dress </option>
				<option> Heel </option>
				<option> Casual </option>
				<option> Sandal </option>
				</select> </label> </br>
		<label> Colour: <input type="text" name="Colour"> </label> </br>
		<label> Exclusive to Discount Club Members?  <select name="DiscountClub">
				<option> Yes </option>
				<option> No </option>
				</select> </label> </br>
		<label> Image Source: <input type="text" name="Image"> </label> </br>
		<label> Description: <textarea name="Description" rows="10" cols="30"> </textarea>  </label> </br>
		<label> Stock: <input type="text" name="Stock"> </label> </br>
		<input type="reset" name="ResetButton" value="Reset" />
                <input type="submit" name="SubmitButton" value="Submit" />
	</form>
</html>

<?php

        $Make = $_POST["Make"];
        $Model = $_POST["Model"];
        $Price = $_POST["Price"];
        $Gender = $_POST["Gender"];

        $host = "localhost";
        $user = "X31571725";
        $password = "X31571725";
        $dbname = "X31571725";

        $dbc = mysql_connect($host,$user,$password) or die("SQL Not Connected");
        mysql_select_db($dbname) OR die("Database Not Found");

	$query="INSERT INTO ProductTable (MAKE, MODEL, PRICE) VALUES ('$Make',$Model',$Price)";

	if(!mysqli_query($dbc,$query))
	{
		echo "No";
	}
	else
	{
		echo "Yes!";
	}


	mysql_free_result($result);
        mysql_close();
