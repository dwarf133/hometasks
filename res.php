<?
session_start();
$ans = array($_SESSION['ans1'], $_SESSION['ans2'], $_POST['ans3']);
$right = array(4, 6, 8);
$score = 0;
for ($i = 0; $i<3;$i++){
    if($ans[$i] == $right[$i])$score++;
}
echo "Ваш балл: $score" . "<br>";
?>
