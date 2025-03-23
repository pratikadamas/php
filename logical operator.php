<?php
$a=10;
$b= 0;
$c=$a && $b;


//  if the condition true the logical operator returns true otherwise false
// but since false is not printed, 

echo"logical operator in php";
echo"<br>";
echo "a && b is ";echo $a&&$b;
echo"<br>";
echo "a||b is"; echo $a||$b;
echo "<br>";
echo "!a is "; echo !$a;
echo "<br>";    
echo "a xor b is "; echo $a xor $b;
echo "<br>";
echo" hi". $c;

?>