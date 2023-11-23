<?php

require 'connectToDB.php';

$username = $mysqli->real_escape_string($_POST['name']);
$password = $mysqli->real_escape_string($_POST['password']);

$sql = "INSERT INTO `user` (`login`, `password`) VALUES ('$username', '$password')";

if ($mysqli->query($sql) === TRUE) {
    echo "Пользователь успешно зарегистрирован!";
} else {
    echo "Ошибка регистрации: " . $mysqli->error;
}

$mysqli->close();
header("Location: authorization.php");
?>