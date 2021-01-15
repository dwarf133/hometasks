<?
session_start();
$_SESSION['last'] = $_SERVER['HTTP_REFERER'];
if(isset($_POST['login']))$_SESSION['login'] = $_POST['login'];
if(isset($_POST['password']))$_SESSION['password'] = $_POST['password'];

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
<body>
<?
if(!isset($_SESSION['login'])){
    include_once 'registry.html';
}
else echo "Hello, " . $_SESSION['login'] . " your last visiting page is " . $_SESSION['last'] . "<br>";
echo "<a href='./bitrix.php'>Bitrix</a><br>";
?>
</body>
</html>