<?php
session_start();

if (isset($_SESSION['name'])) {
    $username_ = $_SESSION['name'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'scriptPHPpages.php'    ?>
    <meta charset="UTF-8">
    <script src="scripts.js"></script>
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
                    <a href="shopClient.php">Магазин</a>
                </li>
                <li>
                    <a class="currentPage" href="linkToUs.php">Связаться с нами</a>
                </li>
                <li class="authorization">
                    <a href="logout.php">Выход</a>
                </li>
                <li class="authorization">
                    <a>Пользователь:<?php echo $username_; ?></a>
                </li>
                <li class="authorization">
                <a href="listItemsClient.php">Моя корзина</a>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <div class="container">
        <form  action="https://httpbin.org/post" method="post" enctype="multipart/form-data">
            <div class="form-group">

                <label class="form-additional" for="name">ФИО</label>
                <input class="input-data" name="name" id="name" type="text" required placeholder="ФИО">
            </div>

            <div class="form-group">
                <label class="form-additional" for="email">Email</label>
                <input class="input-data" id="email" type="text" name="email" placeholder="email">
            </div>

            <div class="form-group">
                <label class="form-label" for="category">Категория обращения</label>
                <select name="category" id="category">
                    <option value="proposal">Предложение</option>
                    <option value="grievance">Жалоба</option>
                </select>
            </div>

            <div class="form-group">
                <p>Как вы узнали о нас?</p>

                <div class="container-selector">
                    <input  type="radio" name="selector" id="selector" value="ethernet">
                    <label class="label-selector" for="selector">Реклама в интернете</label>

                </div>
                <div class="container-selector">
                    <input  type="radio" name="selector" id="selector" value="friends">
                    <label class="label-selector" for="selector">Рассказали знакомые</label>
                </div>
            </div>

            <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Текст сообщения"></textarea>
            </div>
            <div class="form-group">
                <input  type="checkbox" name="agreement" id="agreement" value="yes" required>
                <label for="agreement">Даю согласие на обработку данных</label>
            </div>

            <input type="submit" value="Отправить">
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