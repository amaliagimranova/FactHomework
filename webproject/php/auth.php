<?php
$login = trim($_POST['login']);
$password = md5(trim($_POST['password']));

$db_con = mysqli_connect('localhost', 'root', 'root', 'register'); //соединение с бд
$log_result = mysqli_query($db_con, "SELECT login, pass FROM `users` WHERE login = '$login'"); //запрос есть ли в БД логин
$user_arr = mysqli_fetch_assoc($log_result); //поместили данные в массив

// print_r($user_arr);

//проверка по логину есть ли пользователь с именем
if(!$user_arr){ 
    echo "<script type='text/javascript'>
    window.alert('Пользователь не найден')
    document.location='login.php'
    </script>"; //если в БД нет ни одного логина 
}
elseif($password == $user_arr['pass']){ //иначе, если есть логин в БД делаем проверку пароля
    header ('Location: person.php'); //если введенный пароль совпал с паролем из БД, переходим на страницу 
}
else{ //иначе - пользователь ввел неправильный пароль
    echo "<script type='text/javascript'>
    window.alert('Вы ввели неправильный пароль')  
    document.location='login.php'
    </script>";
}