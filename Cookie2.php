<?php
$cookie_name="Adamas";

$cookie_value="Yahoou Baba";
 setcookie($cookie_name,$cookie_value,time()+ 3600*24,"/"); // 1 day  "/" means the cookie is available in entire website or where we can retrive the cookie values
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   
    echo "<br>";
    echo "Value is:".$_COOKIE[$cookie_name];
    echo "<br>";
    ?>
</body>
</html>
<?php
if(isset($_COOKIE[$cookie_name])){
     echo"Cookie is set";
     echo"<br>";}
else{
    echo "Cookie is not set";
}




?>