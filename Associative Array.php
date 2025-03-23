<?php
// Declare Empty Array
$arr=array();
$q=[];

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];
echo "<br>";
echo $car["brand"];
echo "<br>";
$car["year"] = 2024;

// Display all array items, keys and values:

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}


?>