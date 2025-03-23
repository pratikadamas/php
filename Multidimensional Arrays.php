<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
<body>
<?php
$mul =[
    ["pratik","cse","giri@gmail.com"],
    ["pritam","cse","mondal@gmail.com"],
    ["ranit","cse","adhikary@gmail.com"],
    ["debmallya","cse","jash@gmail.com"]
];

echo"<table border='1'>";
for($row=0;$row<4;$row++){
    echo"<tr>";
    for($col=0;$col<3;$col++){
        echo"<td>".$mul[$row][$col]."</td>";
    }
    echo"</tr>";
}
echo "</table>";



?>
    
</body>
</html>