<?
$str = fopen('read.txt', 'r');
$inp = fread($str, 1);
while ($inp != null){
    if($inp == '\n')echo " ";
    else if ($inp == 'o')echo "O";
    else echo $inp;
}
echo "<br>";
?>