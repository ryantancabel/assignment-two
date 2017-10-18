
<html>

<p> Enter your details </p>

<form action="stafflogin.php" method="post">
	<label> Name: <input type="text" name="adminName"> </label> </br>
	<label> Password: <input type="password" name="pass"> </label> </br>
	<input type="submit" value="Submit"></br>

<?php

	$Username = $_POST["adminName"];
	$Password = $_POST["pass"];

	$host = "localhost";
        $user = "X31571725";
        $password = "X31571725";
        $dbname = "X31571725";

        $dbc = mysql_connect($host,$user,$password) or die("SQL Not Connected");
        mysql_select_db($dbname) OR die("Database Not Found");

	$query = "SELECT * FROM SupportStaff WHERE UserName = '$Username' AND Password = '$Password'";

	$result = mysql_query($query);


	if (mysql_num_rows($result)==1)
	{
		echo "<p> You are Staff </p> \n <br />";
		include("staffsettings.php");
	}
	else
		echo "No!";

	mysql_free_result($result);
        mysql_close();

?>

</html>
