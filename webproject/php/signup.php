<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <?php include 'theme.php'; ?>
</head>
<body>
<div class="wrapper">
    <?php include 'header.php'; ?>
    <div class="form-auth">
        <h1>Регистрация</h1>
        <form method="post" action="check.php">
            <div>
                <input type="text" name="login" id="login" placeholder="Введите логин" autocomplete="off">
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="Введите пароль">
            </div>
            <div>
                <input class="button" type="submit" value="Зарегистрировать">
            </div>
            <div class="auth">
                <a href="login.php">Войти</a>
                <a href="reset.php">Забыли пароль?</a>
            </div>
        </form>
    </div>
</div>
</body>
</html>