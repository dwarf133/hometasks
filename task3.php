<?
session_start();
if(isset($_REQUEST['ans3'])){
    $_SESSION['ans3']=$_REQUEST['ans3'];
    header("Location /W/domains/php.ru/res.php");
}
?>
Сколько будет 4+4?<br>
<form method="post" >
    <input name="ans3" type="text">
    <input type="submit">
</form>
