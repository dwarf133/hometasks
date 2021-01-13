<?
    session_start();
    $temp = $_POST['ans1'];
    echo "Ответ на тест 1: $temp" . "<br>";
    echo "Верный ответ 4" . "<br>";
    $_SESSION['ans1'] = $temp;
?>
Сколько будет 3+3?<br>
<form method="post" action="task3.php">
    <input name="ans2" type="text">
    <input type="submit">
</form>