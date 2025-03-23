<?php
echo"Array in php";
echo"<br>";
echo "Array is a data structure that can store one or more elements in a single variable.";
echo"<br>";
echo "In PHP, array can store differnt data types such as integer, string, float, boolean,  array,function";
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
echo "$cars[0]";
$cars[1]="Mercedes";
echo "<br>";
foreach($cars as $x){
    echo "$x <br>";
}




?>