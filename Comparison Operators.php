<?php 
$a = 2;
$b = 5;

// var_dump() does not return a string, so concatenating it inside echo will cause an error.
echo"<h1 style='color:red'> The value of a == b is ".var_export($a==$b,true)."</h1>";            

// Instead, you should call var_dump() separately or use string concatenation with var_export().

echo "<h1 style='color:red'> The value of a == b is "; var_dump($a == $b); echo "</h1>";
echo "<h1 style='color:green'> The value of a != b is "; var_dump($a != $b); echo "</h1>";

echo "<h1 style='color:blue'> The value of a > b is "; var_dump($a > $b); echo "</h1>";
echo "<h1 style='color:orange'> The value of a < b is "; var_dump($a < $b); echo "</h1>";
echo "<h1 style='color:yellow'> The value of a >= b is "; var_dump($a >= $b); echo "</h1>";
echo "<h1 style='color:black'> The value of a <= b is "; var_dump($a <= $b); echo "</h1>";
echo "<h1 style='color:red'> The value of a <=> b is "; var_dump($a <=> $b); echo "</h1>";
echo "<h1 style='color:green'> The value of a === b is "; var_dump($a === $b); echo "</h1>";
?>

<!-- <?php 
$a=2;
$b= 5;
echo"<h1 style='color:red'> The value of a==b is ".var_dump($a==$b)."</h1>";
echo"<h1 style='color:green'> The value of a!=b is ".var_dump($a!=$b)."</h1>";

echo"<h1 style='color:blue'> The value of a>b is ".var_dump($a>$b)."</h1>";
echo"<h1 style='color:orange'> The value of a<b is ".var_dump($a<$b)."</h1>";
echo"<h1 style='color:yellow'> The value of a>=b is ".var_dump($a>=$b)."</h1>";
echo"<h1 style='color:black'> The value of a<=b is ".var_dump($a<=$b)."</h1>";
echo"<h1 style='color:red'> The value of a<=>b is ".var_dump($a<=>$b)."</h1>";
echo"<h1 style='color:green'> The value of a===b is ".var_dump($a===$b)."</h1>";





?>  -->