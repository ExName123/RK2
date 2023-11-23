<?php

require 'connectToDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверка, что логин и пароль были переданы
    if (isset($_POST["name"]) && isset($_POST["password"])) {
        $login = $_POST["name"];
        $password = $_POST["password"];

        // Защита от SQL-инъекций (лучше использовать подготовленные запросы)
        $login = $mysqli->real_escape_string($login);
        $password = $mysqli->real_escape_string($password);

        // Запрос к базе данных
        $sql = "SELECT * FROM user WHERE login = '$login' AND password = '$password'";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {

            // require 'user.php';
            // $username_ = $_POST["name"];
            // exit();
            header("Location: pageClient.php?username=" . urlencode($_POST["name"]));
        } else {
            $error_message = "Неверный логин или пароль";
            echo '<script>alert("' . $error_message . '");';
            echo 'window.location.href = "authorization.php";</script>';
        }
    }
}

exit();
