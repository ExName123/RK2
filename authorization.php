<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'scriptPHPpages.php'    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фомин 221-361 РК2</title>
    <link rel="stylesheet" href="StyleAuthorization.css">
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
                    <a href="index.php">Главная</a>
                </li>
                <li>
                    <a href="shop.php">Магазин</a>
                </li>
                <li class="authorization">
                    <a href="registration.php">Регистрация</a>
                </li>
                <li class="authorization">
                    <a class="currentPage" href="authorization.php">Авторизация</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <div class="container">
            <form action="scriptAuthorization.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="form-additional" for="login">Логин</label>
                    <input class="input-data" name="login" id="login" type="text" required placeholder="Логин">
                </div>

                <div class="form-group">
                    <label class="form-additional" for="password">Пароль</label>
                    <input class="input-data" id="password" type="password" name="password" required placeholder="Пароль">
                </div>

                <input type="submit" value="Войти">
            </form>
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