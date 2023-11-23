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
                    <a href="index.php" class="currentPage">Главная</a>
                </li>
                <li>
                    <a href="shop.php">Магазин</a>
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
        <div class="container">
            <h1 class="titleFormMain">Добро пожаловать в наш магазин!</h1>
            <p>Мы предоставляем широкий ассортимент продукции высокого качества. Наш магазин специализируется на следующих категориях товаров:</p>
            <ul>
                <li>Видеокарты</li>
                <li>Процессоры</li>
                <li>Ноутбуки</li>
            </ul>
            <p>Мы гарантируем быструю доставку и отличное обслуживание клиентов. Покупайте у нас и наслаждайтесь качественными товарами!</p>
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