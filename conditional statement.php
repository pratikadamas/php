<?php 
$age=10;
if($age>18)
{
    echo "you are eligible to vote";
}
else
{
    echo "you are not eligible to vote";
}
echo"<br>";

$color= "red";


print("Switch case statement  in php \n");
print("<br>");

switch($color)
{
    case "red":
        echo "your favorite color is red";
        break;
    case "blue":
        echo "your favorite color is blue";
        break;
    case "green":
        echo "your favorite color is green";
        break;
    default:
        echo "your favorite color is neither red, blue nor green";
}


?>