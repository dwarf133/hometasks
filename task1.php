<?
session_start();
if(isset($_REQUEST['ans1'])){
    $_SESSION['ans1']=$_REQUEST['ans1'];
    header("Location /W/domains/php.ru/task2.php");
}
?>
Сколько будет 2+2?<br>
<form method="post">
    <input name="ans1" type="text">
    <input type="submit">
</form>
