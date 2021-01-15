<?
$str = file("./style/style.css");
foreach ($str as $value) {
    $arr= str_split($value, 1);
    for($i=0; $i<count($arr); $i++){
        if($arr[$i] == '#'){
            $ans[] = $arr[$i] . $arr[$i+1] .$arr[$i+2] .$arr[$i+3] .$arr[$i+4] .$arr[$i+5] .$arr[$i+6];
        }
    }
}
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
    <select>
        <?
        foreach ($ans as $temp){
            echo "<option style='background-color: $temp;'>Цвет из style.css</option>";
        }
        ?>
    </select>
</body>
</html>
