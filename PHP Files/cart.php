
<?php

if(isset($_COOKIE['value']))
{
  $json = $_COOKIE['value'];

  $array = json_decode($json, true);

  $totalprice = 0;

  include 'db.php';

  echo "<table border=\"1\">\n
          <tr>\n
            <th> Quantity </th>\n
            <th> Item </th>\n
            <th> Cost </th>\n
            <th> Remove </th>\n
          <tr>\n";

  foreach($array as $key => $value)
  {
    $query = "SELECT * FROM ProductList WHERE ID = \"".$value['id']."\"";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result, MYSQL_NUM);

    $price = $row[3];
    $costperrow = $price * $value['quantity'];
    $totalprice = $totalprice + $costperrow;

    echo "<tr>\n";
    echo "<th>".$value['quantity']."</th>\n";
    echo "<th>".$row[1]." ".$row[2]."</th>\n";
    echo "<th> \$".$costperrow."</th>\n";
    echo "<th> <button id=\"$row[0]\" onclick=\"removeProduct(this.id)\" > Remove From Cart </button> </th>\n";
    echo "<tr>\n";

  }

  echo "</table>\n\n";
  echo "<p> Total Cost: \$".$totalprice."</p>\n";
  echo "<div id=\"red\"> </div>\n";



}

?>
