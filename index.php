<?
// задание 1
session_start();
session_destroy();

//задание 2
if(isset($_POST['color'])){
    setcookie("color", $_POST['color']);
    $color = $_POST['color'];
}
else if(isset($_COOKIE['color'])){
    $color = $_COOKIE['color'];
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: <?echo $color;?>;">
    <form method="post">
        Красный<input name="color" value="red" type="radio"><br>
        Синий<input name="color" value="blue" type="radio"><br>
        Желтый<input name="color" value="yellow" type="radio"><br>
        <input type="submit"><br>
    </form>
</body>
</html>