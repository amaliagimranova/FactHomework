<?php
$login = trim($_POST['login']);
$password = trim($_POST['password']);
//$password = md5($password);

$mysql = new mysqli('localhost', 'root', 'root', 'register');
$mysql->query("INSERT INTO `users` (`login`, `pass`) VALUES('$login', '$password')");
$mysql -> close();

header('Location: login.php');
//
//$login1 = md5(trim($_POST['login']));
//$password1 =  md5(trim($_POST['password']));
