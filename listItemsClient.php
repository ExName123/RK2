<?php
session_start();

if (isset($_SESSION['name'])) {
    $username_ = $_SESSION['name'];
} 
$userId = $_SESSION['iduser'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'scriptPHPpages.php'    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фомин 221-361 РК2</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <header>
        <div>
            <img class="logo" src="images/polygon-matic-logo.png" alt="Логотип Магазина электроники">
            <h1 id="title">ElShopping</h1>
        </div>
        <div>
            <ul class="listHeader">
                <li>
                    <a href="shopClient.php">Магазин</a>
                </li>
                <li>
                    <a href="linkToUs.php">Связаться с нами</a>
                </li>
                <li class="authorization">
                    <a href="logout.php">Выход</a>
                </li>
                <li class="authorization">
                    <a>Пользователь:<?php echo $username_; ?></a>
                </li>
                <li class="authorization">
                <a class="currentPage"  href="shopClient.php">Моя корзина</a>
                </li>
            </ul>

        </div>
    </header>
    <main>
        <div class="containerShop">
            <?php
            require 'connectToDB.php';

            $sql = "SELECT user.id AS userId, items.id AS itemId,title, description, price, image FROM items JOIN itemsClient ON items.id = itemsClient.idItem JOIN user ON user.id = itemsClient.idClient WHERE user.id = $userId";
            $result = $mysqli->query($sql);
            
            if ($result->num_rows > 0) {

                echo '<table border="1" style="width: 100%; border-collapse: collapse;">';
                echo '<tr style="background-color:#1F1445 ;"><th>Название</th><th>Описание</th><th>Цена</th><th>Изображение</th><th></th></tr>';

                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td style="padding: 8px; text-align: left;">' . $row['title'] . '</td>';
                    echo '<td style="padding: 8px; text-align: left;">' . $row['description'] . '</td>';
                    echo '<td style="padding: 8px; text-align: left;">' . $row['price'] . '</td>';
                    echo '<td style="padding: 8px;"><img src="' . $row['image'] . '" alt="' . $row['title'] . '" style="width:100px; height:100px; border-radius: 5px;"></td>';
                    echo '<td style="padding: 8px;"><a id="addToCartBtn" href="deleteItemClient.php?idUser=' .  $row['userId'] . '&idItem=' .  $row['itemId'] . '">Удалить</a></td>';
                    echo '</tr>';
                }

                echo '</table>';
            } else {
                echo 'Нет данных в базе.';
            }

            // Закрытие соединения
            $mysqli->close();
            ?>

        </div>
    </main>
    <footer>
        <div class="footerContent">
            <ul>
                <li><a href="">Контакты</a></li>
                <li class="elementsFooter"><a href="">Условия использования</a></li>
                <li><a href="">Политика конфиденциальности</a></li>
                <li>&copy; 2023 FomCorp. Все права защищены.</li>
                <li id="timeLabel"> Сформировано: <?php echo $currentDateTime ?></li>
            </ul>
            <div class="contactInfo">
                <p>Наш адрес: Москва, БС, 12</p>
                <p>Телефон: +7 (123) 456-7890</p>
            </div>
        </div>
    </footer>
</body>

</html>