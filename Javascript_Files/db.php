<?php

	$host = "localhost";
        $user = "X31571725";
        $password = "X31571725";
        $dbname = "X31571725";

        $dbc = mysql_connect($host,$user,$password) or die("SQL Not Connected");
        mysql_select_db($dbname) OR die("Database Not Found");

?>
