<?php
$cityState = array("81611" => "Aspen, Colorado",
"81411" => "Bedrock, Colorado",
"80908" => "Black Forest, Colorado”,
. . . . . . .
"80435" => "Keystone, Colorado",
"80536" => "Virginia Dale, Colorado"
);
$zip = $_GET["zip"];
if (array_key_exists($zip, $cityState))
print $cityState[$zip];
else
print " , ";
?>
