<?php

require 'connectToDB.php';

$username = $mysqli->real_escape_string($_POST['login']);
$password = $mysqli->real_escape_string($_POST['password']);
$name =  $mysqli->real_escape_string($_POST['name']);

$sql = "INSERT INTO `user` (`login`, `password`,`name`) VALUES ('$username', '$password','$name')";

if ($mysqli->query($sql) === TRUE) {
    echo "Пользователь успешно зарегистрирован!";
} else {
    echo "Ошибка регистрации: " . $mysqli->error;
}

$mysqli->close();
echo '<script>alert("' . "Успешная регистрация" . '");';
echo 'window.location.href = "authorization.php";</script>';
