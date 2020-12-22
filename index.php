<?
$time = date('H');
if ($time >= 8 && time < 20)$img = 'morning_kitty.jpg';
else if ($time < 8 || $time >= 20) $img = 'sleeping_kitty.jpg';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kitty Time!</title>
</head>
<body>
    <div>
        <?
        echo "<img width='500px' height='350px' src='./images/$img'>";
        echo "<br>";
        echo "У котят время: $time часов";
        ?>

    </div>

</body>
</html>
