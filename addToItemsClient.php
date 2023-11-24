<?php
require('connectToDB.php');
session_start();

$usernameId = isset($_SESSION['iduser']) ? $_SESSION['iduser'] : null;

if ($usernameId) {
    $product_id = isset($_GET['id']) ;

    if ($product_id) {

        $query = "INSERT INTO itemsClient (idItem, idClient) VALUES (?, ?)";

        $stmt = $mysqli->prepare($query);

        if ($stmt) {
            $stmt->bind_param("ii", $product_id, $usernameId);

            if ($stmt->execute()) {
                echo "<script>alert('Добавлено в корзину');</script>";
                echo "<script>window.location.href = 'shopClient.php';</script>";
            } else {
                echo 'Error executing statement: ' . $stmt->error;
            }
            $stmt->close();
        } else {
            echo 'Error preparing statement: ' . $mysqli->error;
        }
    } else {
        echo 'Product ID not provided.';
    }
} else {
    echo 'User not logged in.';
}
?>
