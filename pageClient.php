<?php
$username_ = $_GET['username'];
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
            <img class="logo" src="images/polygon-matic-logo.png" alt="Логотип магазина электроники">
            <h1 id="title">ElShopping</h1>
        </div>
        <div>
            <ul class="listHeader">
                <li>
                    <a  class="currentPage" href="shop.php">Магазин</a>
                </li>
                <li>
                    <a href="">Связаться с нами</a>
                </li>
                <li class="authorization">
                    <a href="logout.php">Выход</a>
                </li>
                <li class="authorization">
                    <a>Пользователь:<?php echo $username_; ?></a>
                </li>
                <li class="authorization">
                    <a>Моя корзина</a>
                </li>
            </ul>

        </div>
    </header>
    <main>

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