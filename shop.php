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
                    <a href="index.php">Главная</a>
                </li>
                <li>
                    <a class="currentPage" href="shop.php">Магазин</a>
                </li>
                <li class="authorization">
                    <a href="authorization.php">Авторизация</a>
                </li>
                <li class="authorization">
                    <a href="registration.php">Регистрация</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <div class="containerShop">
            <?php
            require 'connectToDB.php';
            $result = $mysqli->query("SELECT id,title,description,price,image FROM items");

            if ($result->num_rows > 0) {

                echo '<table border="1" style="width: 100%; border-collapse: collapse;">';
                echo '<tr style="background-color:#1F1445 ;"><th>Title</th><th>Description</th><th>Price</th><th>Image</th><th>Action</th></tr>';

                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td style="padding: 8px; text-align: left;">' . $row['title'] . '</td>';
                    echo '<td style="padding: 8px; text-align: left;">' . $row['description'] . '</td>';
                    echo '<td style="padding: 8px; text-align: left;">' . $row['price'] . '</td>';
                    echo '<td style="padding: 8px;"><img src="' . $row['image'] . '" alt="' . $row['title'] . '" style="width:100px; height:100px; border-radius: 5px;"></td>';

                    echo '<td style="padding: 8px;"><a href="details.php?id=' . $row['id'] . '">View Details</a></td>';

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