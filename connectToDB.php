<?php
$mysqli;
try{
    define('DB_HOST', 'std-mysql.ist.mospolytech.ru:3306/std_2275_grant'); 
    define('DB_USER', 'std_2275_grant'); 
    define('DB_PASSWORD', '12345678'); 
    define('DB_NAME', 'std_2275_grant'); 

    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

}
catch(Exception $e){
    die('Ошибка подключения к базе данных');
}
?>
