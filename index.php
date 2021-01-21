<?php
$hostname = "localhost";
$username = "dwarf133";
$password = "qazwsxEDC09";
$dbname = "people";

/*$db_con = mysqli_connect($hostname, $username, $password, $dbname);
//var_dump($db_con);

mysqli_set_charset($db_con, 'utf8');

$sql = mysqli_query($db_con, "select * from name");
$arr = mysqli_fetch_all($sql, MYSQLI_ASSOC);
echo "<pre>";
print_r($arr);
echo "</pre>";
foreach ( $arr as $item){
    foreach ($item as $key => $value){
        if($key == "name")echo "$value ";
    }
}*/

$db_con = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_query($db_con, "CREATE TABLE People (
    id_pearson int(5) auto_increment primary key,
    name varchar(20) not null,
    surname varchar(40) not null,
    age int  
)");
