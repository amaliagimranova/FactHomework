<?php

class Authorization {
    protected $login;
    protected $password;

    public function __construct(){
        $this->login = trim($_POST['login']);
        $this->password = md5(trim($_POST['password']));
    }

    public function Auth(){
        $db_con = mysqli_connect('localhost', 'root', 'root', 'register'); //соединение с бд
        $log_result = mysqli_query($db_con, "SELECT login, pass FROM `users` WHERE login = '$this->login'"); //запрос есть ли в БД логин
        $user_arr = mysqli_fetch_assoc($log_result); //поместили данные в массив

        if(!$user_arr){ 
            echo "<script type='text/javascript'>
            window.alert('Пользователь не найден')
            document.location='login.php'
            </script>"; //если в БД нет ни одного логина 
        }
        elseif($this->password == $user_arr['pass']){ //если есть логин в БД делаем проверку пароля
            header ('Location: person.php'); //если введенный пароль совпал с паролем из БД, переходим на страницу 
        }
        else{ //иначе - пользователь ввел неправильный пароль
            echo "<script type='text/javascript'>
            window.alert('Вы ввели неправильный пароль')  
            document.location='login.php'
            </script>";
        }
        $db_con -> close();
    }
}

class SignUp{
    protected $login;
    protected $password;

    public function __construct(){
        $this->login = trim($_POST['login']);
        $this->password = trim($_POST['password']);
    }

    public function Sign(){
        $db_con = mysqli_connect('localhost', 'root', 'root', 'register');
        $checkLog = mysqli_query($db_con, "SELECT id FROM `users` WHERE login = '$this->login'");

        if(!preg_match("/^[a-zA-Z0-9]+$/",$this->login)){
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
        }elseif(strlen($this->password) == 0){
            echo "<script type='text/javascript'>
            window.alert('Введите пароль');  
            document.location='signup.php'
            </script>";
        }elseif(strlen($this->password)<6){
            echo "<script type='text/javascript'>
            window.alert('Пароль должен быть не менее 6 символов');  
            document.location='signup.php'
            </script>";
        }
        else{
            $this->password = md5($this->password);
            $insert = mysqli_query($db_con, "INSERT INTO `users` (`login`, `pass`) VALUES('$this->login', '$this->password')");
            echo "<script type='text/javascript'>
            window.alert('Поздравляем, Вы зарегестрированы в системе!');  
            document.location='login.php'
            </script>";
        }

        $db_con -> close();
    }
}
