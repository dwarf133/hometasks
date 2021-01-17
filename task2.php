<?
session_start();
if(isset($_REQUEST['ans2'])){
    $_SESSION['ans2']=$_REQUEST['ans2'];
    header("Location /W/domains/php.ru/task3.php");
}
?>
Сколько будет 3+3?<br>
<form method="post" >
    <input name="ans2" type="text">
    <input type="submit">
</form>