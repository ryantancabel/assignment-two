<?php

function populate($query)
{
	include 'db.php';

	$result = mysql_query($query);

	while($row=mysql_fetch_array($result, MYSQL_NUM))
	{
		echo '<div class="box">'."\n";
		echo "<p> $row[1] $row[2] </p>"."\n";
		echo "<p> $row[8]"."\n";
		echo '</div>';
	}

	mysql_free_result($result);
	mysql_close();

}



if($_GET["result"] == 1)
{	
	$query = 'SELECT * FROM ProductList WHERE TYPE = "Dress" AND GENDER = "Mens"';
	populate($query); 
}

?>