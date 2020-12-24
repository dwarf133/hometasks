<?
//задание 1
$n = 10; //установка длинны массива n
for ($i = 0; $i < $n; $i++){
    $arr1[$i] = mt_rand(0, 35);
    if ($i % 2 == 0){
        $temp = "<b>$arr1[$i]</b>";
    }
    else {
        $temp = "$arr1[$i]";
    }
    echo "$temp" . "<br>";
}
echo "<br>";

// задание 2
$arr2 = array(
    0 => array('apple', 'pineapple', 'pine'),
    1 => array('after', 'before', 'now'),
    2 => array('kiss', 'merge', 'ask')
);
foreach ($arr2 as $line){
    foreach ($line as $item){
        if($item{0} == 'a'){
            echo "$item ";
        }
    }
}
echo "<br>" . "<br>";

// задание 3
$arr3 = array(
    0 => array(35, 45, 55),
    1 => array(10, 12, -5, 12),
    2 => array(15, 75, 22, 0, 75, 33)
);
$itemNum = 0;
for ($i = 0; $i < count($arr3); $i++){
    $temp = $i + 1;
    $num = count($arr3[$i]);
    $itemNum += $num;
    echo "Измерение $temp содержит $num элементов" . "<br>";
}
echo "Всего: $itemNum элементов в массиве";
