<?php
if (isset($_POST['comment'])){
    $text =$_POST['comment'];
    mail("amaliagimranova@yandex.ru", "Comment", "$text");
}
//использую MAMP, в нем нет возможности сохранять файлы email, надеюсь корректно записала код
?>
<!-- session_start() - открытие сессии -->
<!-- session_destroy() - уничтожение данных сессии -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <?php include 'theme.php'; ?>
</head>
<body>
<div class="wrapper">
    <?php include 'header.php'; ?>
    <div class="form-person">
        <h1>Личный кабинет</h1>
        
        <form method="post">
            <div class="textarea">
                <textarea class="comment" name="comment" id="comment" placeholder="Ваше сообщение..."></textarea>
            </div>
            <div>
                <input class="button" type="submit" value="Отправить отзыв">
            </div>
            <div class="auth off">
                <a href="login.php">Выйти</a>
            </div>
        </form>
        <form class="sites" method="get">
                <input class="button site" type="submit" value="Перейти на страницу компании Fact" name="fact">
                <input class="button site" type="submit" value="Перейти на страницу компании Bitrix" name="bitrix">
        </form>
        <p>Последняя посещенная страница:
            <?php
            //Проверка, если пользователь зашел на сайт первый раз и не заходил на сайты Факт или Битрикс
            if (!isset($_COOKIE['site']) || $_COOKIE['site'] == 'none'){
                setcookie('site', 'none', time() + 3600 * 24 * 7);
                echo "Еще ни одна страница не посещена";
            }

            //Проверка, если пользователь выбрал Переход на страницу факт или битрикс
            //Осуществляется переход на страницу и записывается значение в куки
            if (isset($_GET['fact'])) {
                setcookie('site', 'fact', time() + 3600 * 24 * 7);
                header('Location: https://fact.digital/');
            }
            if (isset($_GET['bitrix'])) {
                setcookie('site', 'bitrix', time() + 3600 * 24 * 7);
                header('Location: https://www.bitrix24.ru/');
            }

            //Идет проверка, какое значение имеет куки и в зависимости от выбора выводит на экран информацию
            if ($_COOKIE['site'] === 'fact'){
                echo "FACT";
            }elseif ($_COOKIE['site'] === 'bitrix'){
                echo "BITRIX";
            }
            ?>
        </p>
    </div>
</div>
</body>
</html>