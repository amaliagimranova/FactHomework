<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <?php include 'theme.php'; ?>
</head>
<body>
<div class="wrapper">
    <?php include 'header.php'; ?>
    <div class="form-auth">
        <h1>Авторизация</h1>
        <form method="post" action="auth.php">
            <div>
                <input class="log" type="text" name="login" id="login" placeholder="Введите логин" autocomplete="off">
            </div>
            <div>
                <input class="pass" type="password" name="password" id="password" placeholder="Введите пароль">
            </div>
            <div>
                <input class="button" type="submit" value="Войти">
            </div>
            <div class="auth">
                <a href="signup.php">Регистрация</a>
                <a href="reset.php">Забыли пароль?</a>
            </div>
        </form>
        <p>* Логин: admin <br> Пароль: qwerty123</p>
    </div>
</div>
</body>
</html>