<?php

require 'connectToDB.php';

$itemId = $_GET['id'];

$sql = "SELECT * FROM items WHERE id = $itemId";
$result = $mysqli->query($sql);

if ($result && $result->num_rows > 0) {
    $data = $result->fetch_assoc();
}

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
        <div class="filters__img">
            <img id="imgDetails" src="" />
            <div class="container">
                <form>
                    <div class="details-container">
                        <h2><?php echo $data['title']; ?></h2>
                        <img class="imgDetails" src="<?php echo $data['image']; ?>" alt="<?php echo $data['title']; ?>">
                        <p>Описание:<?php echo $data['description']; ?></p>
                        <p>Цена: $<?php echo $data['price']; ?></p>
                        <p>Количество: $<?php echo $data['count']; ?></p>
                    </div>
                    <div id="title"></div>
                    <div id="count"></div>
                    <div id="price"></div>
                    <div id="description"></div>
                </form>
            </div>
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