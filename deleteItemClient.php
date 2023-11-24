<?php
session_start();

    $userId = $_GET['idUser'];
    $itemId = $_GET['idItem'];

    require 'connectToDB.php';

    // Perform the deletion
    $sql = "DELETE FROM itemsClient WHERE idClient = $userId AND idItem = $itemId";
    $result = $mysqli->query($sql);

    // Check if the deletion was successful
    if ($result) {
        echo "<script>alert('Удалено из корзины');</script>";
        echo "<script>window.location.href = 'shopClient.php';</script>";
    } else {
        echo "<script>alert('Ошибка');</script>";
    }

    // Close the database connection
    $mysqli->close();

?>