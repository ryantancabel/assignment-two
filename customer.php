<?php

if(isset($_POST["Submit4"]) || isset($_POST["Submit5"]))
{

	include 'db.php';

	if(isset($POST["Submit"]))
	{

		$GetQuery = "SELECT * FROM MemberBase WHERE Username = '$_POST[User]'";
		$result=mysql_query($GetQuery);

                while($row=mysql_fetch_array($result, MYSQL_NUM))
                {
			echo "<table border=\"1\">\n";
			echo "<tr>";
                        echo "<td><input type=\"text\" value=\"$row[0]\" /></td>\n";
                        echo "$row[1]\n";
			echo "</table>";
                }





		$UpdateQuery = "UPDATE MemberBase SET
			Password='$_POST[password]', Email='$_POST[email]', FirstName='$_POST[first]',
			LastName='$_POST[last]',StreetName='$_POST[street]',Suburb='$_POST[suburb]',
			PostCode='$_POST[post]',State='$_POST[state]' WHERE Username='$_POST[search]'";

		$result=mysql_query($UpdateQuery);
	}

	if(isset($_POST["Submit4"]))
	{
		$GetQuery = "SELECT * FROM MemberBase";
		$result=mysql_query($GetQuery);

		while($row=mysql_fetch_array($result, MYSQL_NUM))
                {
			echo "$row[0]\n<br />";
			echo "$row[1]";
                }


	}
		mysql_close();


}

/* header("Location: staffsettings.php"); */

?>

