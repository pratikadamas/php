<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <button name="button" value='bt1'> call</button>
    </form>
</body>
</html>
<?php
if(isset($_REQUEST['button']))
{
    butt();

}
    function butt()
    {
        echo "<h1>button is clicked</h1>";
    }

?>