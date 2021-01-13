<?
session_start();
$temp = $_POST['ans2'];
echo "Ответ на тест 1: $temp" . "<br>";
echo "Верный ответ 6" . "<br>";
$_SESSION['ans2'] = $temp;
?>
Сколько будет 4+4?<br>
<form method="post" action="res.php">
    <input name="ans3" type="text">
    <input type="submit">
</form>
