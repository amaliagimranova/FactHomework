<?php //date_default_timezone_set("America/Los_Angeles"); //для проверки работы изменения тем
date_default_timezone_set("Europe/Moscow");
$time = date("H");
$cur_time = date("H:i");
echo "Текущее время: "."$cur_time";
if(8<=$time && $time<20){
    echo '<link rel="stylesheet" href="../css/lightstyle.css">';
}else{
    echo '<link rel="stylesheet" href="../css/darkstyle.css">';
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/arraystyle.css">
</head>

<body>
<div class="wrapper">
    <?php include 'header.php'; ?>
    <div class="array-item">
        <?php
        //1
        echo "<br><h2>Массив рандомных чисел</h2><br>";
        $arr_rand = [];
        for ($i = 0; $i < 20; $i++) {
            array_push($arr_rand, mt_rand(0, 100));

            if (($arr_rand[$i] % 2) == 0) {
                echo "<b>$arr_rand[$i]</b><br>";
            } else {
                echo "$arr_rand[$i]<br>";
            }
        }
        ?>
    </div>

    <div class="array-item">
        <?php
        $arr_str = array(
            'Бабочки' => array('Бархатка', 'Аполлон', 'Галатея', 'Ксут'),
            'Динозавры' => array('Аллозавр', 'Спинозавр', 'Апатозавр', 'Таброзавр', 'Мегалозавр', 'Овираптор')
        );
        echo "<br><h2>Слова на букву А</h2><br>";
        foreach ($arr_str as $type => $name) {
            foreach ($name as $nameA) {
                if (mb_substr($nameA, 0, 1) === "А") {
                    echo $nameA . "<br>";
                }
            }
        }
        ?>
    </div>
    <div class="array-item">
        <?php
        echo "<br><h2>Города</h2><br>";

        $countries = array(
            'Франция' => array('Париж', 'Ницца', 'Лион', 'Марсель'),
            'Мальдивы' => array('Мале', 'Хитхадхоо', 'Фувахмулах', 'Кулхудуффуши', 'Виллингили'),
            'Канада' => array('Торонто', 'Монреаль', 'Оттава', 'Миссиссога', 'Эдмонтон', 'Калгари'),
            'Мексика' => array('Мехико', 'Пуэбла', 'Тихуана', 'Монтеррей', 'Чиуауа', 'Эрмосильо', 'Толука')
        );
//        echo '<pre>';
//        print_r($countries);
        $sum = 0;
        foreach ($countries as $country => $city) {
            echo "Количество городов страны $country " . count($city) . '<br>';
            $sum += count($city);
        }
        echo "<br>Общее количество городов: " . $sum;


        //echo count($country, COUNT_RECURSIVE); //возвращает количество, выводит вместе с названиями стран
        ?>
    </div>
</div>
</body>
</html>

