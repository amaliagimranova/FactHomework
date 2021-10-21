<?php
//date_default_timezone_set("America/Los_Angeles"); //для проверки работы изменения тем
//date_default_timezone_set("Europe/Moscow"); //для проверки работы изменения тем

//ФУНКЦИЯ ДЛЯ АВТОМАТИЧЕСКОЙ СМЕНЫ ТЕМ В ЗАВИСИМОСТИ ОТ ВРЕМЕНИ СУТОК
    //function styleChange()
    //{
    //    $time = date("H");
    //    if (8 <= $time && $time < 20) {
    //        echo '<link rel="stylesheet" href="../css/light.css">';
    //    } else {
    //        echo '<link rel="stylesheet" href="../css/dark.css">';
    //    }
    //}

//ФУНКЦИЯ ДЛЯ СМЕНЫ ТЕМ В ЗАВИСИМОСТИ ОТ ВЫБОРА В ВЫПАДАЮЩЕМ СПИСКЕ. ВЫБОР СОХРАНЯЕТСЯ В CCOOKIE
    echo "<link rel='stylesheet' href='../css/light.css'>"; //по умолчанию стоит светлая тема
    function styleChange()
    {
        if (isset($_GET['theme'])){
            setcookie("color", $_GET["theme"], time()+3600*24*7);
        }
        $color = $_COOKIE['color'];
        echo "<link rel='stylesheet' href='../css/$color.css'>";
    }
styleChange();
