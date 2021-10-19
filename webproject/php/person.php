<?php
if (isset($_POST['comment'])){
    $text =$_POST['comment'];
    mail("amaliagimranova@yandex.ru", "Comment", "$text");

}
//использую не openserver, а MAMP, в нем нет возможности сохранять файлы email, надеюсь корректно записала код
?>
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
    <div class="form-comment">
        <h1>Личный кабинет</h1>
        <form method="post">
            <div>
                <textarea class="comment" name="comment" id="comment" placeholder="Ваше сообщение..."></textarea>
            </div>
            <div>
                <input class="button" type="submit" value="Отправить отзыв">
            </div>
            <div class="auth off">
                <a href="login.php">Выйти</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>