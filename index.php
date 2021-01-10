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
function f1($str){
    $len = mb_strlen($str);
    if ($len > 5) {
        $str = mb_substr($str, 3, $len - 3);
        $str = $str . "...";
    }
    echo $str . "<br>";
}
f1($str);

// задание 2
$str = abceabceabce;
function f2($str){
    $str = str_replace(array('a', 'b', 'c'), array('1', '2', '3'), $str);
    echo $str . "<br>";
}
f2($str);

// задание 3
$str = "abc abc abc";
function f3($str){
    $arr = str_split($str);
    $ans = count($arr) - 1;
    for (; $ans >= 0; $ans--) {
        if ($arr[$ans] == "b") {
            break;
        }
    }
    echo "$ans" . "<br>";
}
f3($str);

// задание 4
$str = "html css php";
function spt($str){
    $arr = explode(' ', $str);
    return $arr;
}
print_r(spt($str));
echo "<br>";

// задание 5
$str1 = "21-08-2020";
$str2 = "14-11-2020";
function f5($str1, $str2){
    $timeBetween = strtotime($str2) - strtotime($str1);
    $timeBetween /= 60 * 60 * 24;
    echo "$timeBetween" . "<br>";
}
f5($str1, $str2);

// Дз по функциям

// Задание 1
$arr = array(12, 0 ,16, 5, 3);
function rand2($arr){
    for($i = 0; $i < count($arr); $i++){
        $arr[$i] = mt_rand(0, 20);
    }
    return $arr;
}
print_r(rand2($arr));
echo "<br>";

// Задание 2
$str = "php, html, css, bitrix";
function word_count($str){
    $arr = explode(', ', $str);
    return count($arr);
}
echo word_count($str) . "<br>";

// задание 3
function reverse($str){
    $arr  = str_split($str);
    $arr = array_reverse($arr);
    return implode($arr);
}
echo reverse($str) . "<br>";

// задание 4
function len($str){
    $arr  = str_split($str);
    return count($arr);
}
echo len($str) . "<br>";

// задание 5
function columner($str){
    $arr  = str_split($str);
    foreach ($arr as $item){
        echo $item . "<br>";
    }
}
columner($str);