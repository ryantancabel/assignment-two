<?php

function populate($query)
{
	include 'db.php';

	$result = mysql_query($query);

	echo '<div id="results">'."\n";

	while($row=mysql_fetch_array($result, MYSQL_NUM))
	{
		echo '<div class="box">'."\n";
		echo "<p> <b> $row[1] </b> $row[2] </p>"."\n";
		echo '<img src="Images/'.$row[8].'" alt="image" height="100" width="100" >'."\n";
		echo '</div>'."\n";

	}

	mysql_free_result($result);
	mysql_close();

}


if($_GET["result"] == 0)
{
	echo "\n".'<img src="Untitled-1.jpg" alt="Main Image" />'."\n";

}

if($_GET["result"] == 1)
{	
	$query = 'SELECT * FROM ProductList WHERE TYPE = "Dress" AND GENDER = "Mens"';
	populate($query); 
}

if($_GET["result"] == 2)
{	
	$query = 'SELECT * FROM ProductList WHERE TYPE = "Sports" AND GENDER = "Mens"';
	populate($query); 
}

if($_GET["result"] == 3)
{	
	$query = 'SELECT * FROM ProductList WHERE TYPE = "Running" AND GENDER = "Mens"';
	populate($query); 
}

if($_GET["result"] == 4)
{	
	$query = 'SELECT * FROM ProductList WHERE TYPE = "Sandals" AND GENDER = "Mens"';
	populate($query); 
}

if($_GET["result"] == 5)
{	
	$query = 'SELECT * FROM ProductList WHERE TYPE = "Sports" AND GENDER = "Womens"';
	populate($query); 
}

if($_GET["result"] == 6)
{	
	$query = 'SELECT * FROM ProductList WHERE TYPE = "Running" AND GENDER = "Womens"';
	populate($query); 
}

if($_GET["result"] == 7)
{	
	$query = 'SELECT * FROM ProductList WHERE TYPE = "Sandals" AND GENDER = "Womens"';
	populate($query); 
}

if($_GET["result"] == 8)
{	
	$query = 'SELECT * FROM ProductList WHERE TYPE = "Heels" AND GENDER = "Womens"';
	populate($query); 
}

if(isset($_GET["value"]))
{
	$value = $_GET[value];	
	$query = "SELECT * FROM ProductList WHERE MAKE LIKE '%$value%' OR MODEL LIKE '%$value%'" ;
	populate($query); 
}

?>