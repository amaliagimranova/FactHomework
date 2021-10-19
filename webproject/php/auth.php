<?php
//$login = trim($_POST['login']);
//$password = trim($_POST['password']);
////$password = md5($password);
//
//$mysql = new mysqli('localhost', 'root', 'root', 'register');
//
//$result = $mysql->query("SELECT * FROM `users` WHERE login = '" . $login . "' and pass = '" . $password . "'");
//$user = $result -> fetch_assoc();
//
//if(count($user) == 0){
//    echo "Пользователь не найден";
//    exit();
//}
//
//print_r($user);
//exit();
//
//$mysql->close();
//
//header('Location: /');

// Верный логин admin
// Верный пароль qwerty123
$login = trim($_POST['login']);
$password = md5(trim($_POST['password']));
echo $password;

if ($login == '' || $password == ''){
    echo "<script type='text/javascript'>alert('Укажите данные');</script>";
    exit();
}
elseif($login == 'admin' && $password == '3fc0a7acf087f549ac2b266baf94b8b1'){
    header('Location: person.php');
    exit();
}
else{
    echo "<script type='text/javascript'>alert('Доступ к материалам не получен');</script>";
    exit();
}


