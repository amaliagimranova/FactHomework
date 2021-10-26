<?php
$login = trim($_POST['login']);
$password = trim($_POST['password']);

//установить коннект с бд
$db_con = mysqli_connect('localhost', 'root', 'root', 'register');

//проверка логина
$errorCount = 0;
$checkLog = mysqli_query($db_con, "SELECT id FROM `users` WHERE login = '$login'");

if(!preg_match("/^[a-zA-Z0-9]+$/",$login)){
    echo "<script type='text/javascript'>
    window.alert('Логин может состоять только из букв английского алфавита и цифр');  
    document.location='signup.php'
    </script>";
}
elseif(mysqli_num_rows($checkLog) > 0)
{
    echo "<script type='text/javascript'>
    window.alert('Логин пользователя уже занят!!! Пожалуйста, придумайте новое имя');  
    document.location='signup.php'
    </script>";
}elseif(strlen($password) == 0){
    echo "<script type='text/javascript'>
    window.alert('Введите пароль');  
    document.location='signup.php'
    </script>";
}elseif(strlen($password)<6){
    echo "<script type='text/javascript'>
    window.alert('Пароль должен быть не менее 6 символов');  
    document.location='signup.php'
    </script>";
}
else{
    $password = md5($password);
    $insert = mysqli_query($db_con, "INSERT INTO `users` (`login`, `pass`) VALUES('$login', '$password')");
    echo "<script type='text/javascript'>
    window.alert('Поздравляем, Вы зарегестрированы в системе!');  
    document.location='login.php'
    </script>";
}
    
$db_con -> close();