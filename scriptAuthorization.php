<?php

require 'connectToDB.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"]) && isset($_POST["password"])) {
        $login = $_POST["login"];
        $password = $_POST["password"];

        $login = $mysqli->real_escape_string($login);
        $password = $mysqli->real_escape_string($password);

        $sql = "SELECT * FROM user WHERE login = '$login' AND password = '$password'";
        $result = $mysqli->query($sql);

        if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();
            $name = $row['name'];

            session_start();
            $_SESSION['name'] = $name;
            header("Location: pageClient.php?name=" . urlencode($_SESSION['name']));
        } else {
            $error_message = "Неверный логин или пароль";
            echo '<script>alert("' . $error_message . '");';
            echo 'window.location.href = "authorization.php";</script>';
        }
    }
}

exit();
