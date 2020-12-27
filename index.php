<?
// задание 5
$str = "somedock.php";
$ending = substr($str, -4, 4);
if($ending == ".php"){
    echo "Да" . "<br>";
}
else {
    echo "Нет" . "<br>";
}

// задание 1
$str = "dgsdgsdgsdgsdg";
$len = mb_strlen($str);
if ($len > 5){
    $str = mb_substr($str, 3, $len - 3);
    $str = $str . "...";
}
echo $str . "<br>";

// задание 2
$str = abceabceabce;
$str = str_replace(array('a', 'b', 'c'), array('1', '2', '3'), $str);
echo $str . "<br>";

// задание 3
$str = "abc abc abc";
$arr = str_split($str);
$ans = count($arr) - 1;
for (; $ans >= 0; $ans--){
    if($arr[$ans] == "b"){
        break;
    }
}
echo "$ans" . "<br>";

// задание 4
$str = "html css php";
$arr = explode(' ', $str);
print_r($arr);
echo "<br>";

// задание 5
$str1 = "21-08-2020";
$str2 = "14-11-2020";
$timeBetween = strtotime($str2) - strtotime($str1);
$timeBetween /= 60 * 60 * 24;
echo "$timeBetween" . "<br>";
