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
    <div class="form-auth">
        <h1>Сбросить пароль</h1>
        <form method="post" action="">
            <div>
                <input class="log" type="text" name="email" id="email" placeholder="Введите Email" autocomplete="off">
            </div>
            <div>
                <input class="button" type="submit" value="Отправить">
            </div>
            <div class="auth">
                <a href="login.php">Войти</a>
                <a href="signup.php">Регистрация</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>