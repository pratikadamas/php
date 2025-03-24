<?php
setcookie("pratik","Giri",  time()+120);
setcookie("adamas","university", time()+ 600);
setcookie("das","Samprity", time()+ 0);

if (isset($_COOKIE["pratik"])) {
    echo" cookie name is set";echo" $_COOKIE[pratik]";

}
else{
    echo"cookie is not set";
}
echo"<br>";

foreach($_COOKIE as $key => $value) {
    echo "{$key} ={$value} <br>";
}





?>