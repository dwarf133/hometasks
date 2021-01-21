<?php
$hostname = "localhost";
$username = "dwarf133";
$password = "qazwsxEDC09";
$dbname = "city";

$db_con = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_set_charset($db_con, 'utf8');

function run_sql_task($sql_command, $db_con){
    $sql = mysqli_query($db_con, $sql_command);
    echo $sql?"Успех":"Произошла ошибка!";
    echo "<br>";
}

// Вставка значений
$sql_command = "INSERT INTO name (name, Age, id_city) VALUES ('Денис', 19, 3), ('Дина', 15, 1);";
run_sql_task($sql_command, $db_con);

// Изменение значений
$sql_command = "UPDATE name SET Age = 16 WHERE name = 'Дина';";
run_sql_task($sql_command, $db_con);

// Удаление данных
$sql_command = "DELETE FROM name WHERE name = 'Денис';";
run_sql_task($sql_command, $db_con);

// Объединение таблиц
$sql_command = "SELECT name.name, name.Age, city.name AS 'city' FROM name JOIN city USING(id_city);";
$sql = mysqli_query($db_con, $sql_command);
$arr = mysqli_fetch_all($sql, MYSQLI_ASSOC);
echo "<pre>";
print_r($arr);
echo "</pre>";

// Создание новой таблицы
$sql_command = "CREATE TABLE tags (
    id_tag INT PRIMARY KEY AUTO_INCREMENT, 
    label TEXT NOT NULL 
);";
run_sql_task($sql_command, $db_con);

// Добавляем значения
$sql_command = "INSERT INTO tags (label) VALUES ('ИНтересный город'), ('Место силы');";
run_sql_task($sql_command, $db_con);

// Добавляем столбец внешнего ключа в таблицу city
$sql_command = "ALTER TABLE city ADD id_tag INT;";
run_sql_task($sql_command, $db_con);

// Делаем стобец внешним ключом
$sql_command = "ALTER TABLE city ADD FOREIGN KEY (id_tag) REFERENCES tags (id_tag);";
run_sql_task($sql_command, $db_con);