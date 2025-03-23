<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>selest radio button</title>
</head>
<body>
    <h1 style="color:hotpink">select your cradit card</h1>
    <form action="radio.php" method="post">
        <input type="radio" name="cradit_card" value="visa">visa
        <input type="radio" name="cradit_card" value="master">master
        <input type="radio" name="cradit_card" value="paypal">paypal
        <input type="submit"  name="select"value="submit">
    </form>
    <?php

    if(isset($_POST['select'])){
        $card=$_POST['cradit_card'];
        echo "<h1 style='color:green'>your selected card is : $card</h1>";
    }
    else{
        echo "<h1>please select a card</h1>";
    }

    ?>
    
</body>
</html>