<?php
$str1="Hello";
$str2="Giri";
$str3= "pratik ";
$age=20;

// E.g. when there is a variable in the string, it returns the value of the variable:
echo"my name is $str3 and i am $age years old";
echo"<br>";
echo "my name is ".$str3;
// Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:
    echo"<br>";
echo" my full name is ".$str3.=$str2;


?>