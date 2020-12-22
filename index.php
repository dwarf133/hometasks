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
    <p>
        <?
            // вывод чисеел от 5 до 13 в столбик
            for ($i = 5; $i <= 13; $i++)echo "$i" . "<br>";

            // задание 2 while
            $num = 1000;
            $count = 0;
            while ($num >= 50){
                $num /= 2;
                $count++;
            }
            echo "Число получившееся в результате: $num, количество итераций: $count, цикл while." . "<br>";

            // задание 2 for
            $num = 1000;
            $count = 0;
            for (; $num >= 50; $count++, $num /= 2);
            echo "Число получившееся в результате: $num, количество итераций: $count, цикл for." . "<br>";

            // задание 3
            $i = 0; //назначаем значение i [0..10]
            for ($j = 0; $j <= 10 - $i; $j++) {
                echo "$j";
                if ($j != 10 - $i)echo ", ";
            }
            echo "<br>"
        ?>
    </p>
</body>
</html>
