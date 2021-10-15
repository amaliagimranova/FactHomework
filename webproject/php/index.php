<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="../css/style.css">
    <?php //date_default_timezone_set("America/Los_Angeles"); //для проверки работы изменения тем
    date_default_timezone_set("Europe/Moscow");
    $time = date("H");
    $cur_time = date("H:i");
    echo "Текущее время: "."$cur_time";
    if(8<=$time && $time<20){
        echo '<link rel="stylesheet" href="../css/light.css">';
    }else{
        echo '<link rel="stylesheet" href="../css/dark.css">';
    }?>
</head>
<body>
<div class="wrapper">
    <?php include 'header.php';?>
    <main>
        <div class="main">
            <svg class="circle" viewBox="0 0 253 253" xmlns="http://www.w3.org/2000/svg">
                <circle cx="126.5" cy="126.5" r="126.5"/>
            </svg>
            <svg class="triangle" width="66" height="72" viewBox="0 0 66 72" xmlns="http://www.w3.org/2000/svg">
                <path d="M33 0L65.909 71.25H0.0910339L33 0Z"/>
            </svg>

            <h1 class="title-h1">Гимранова Амалия</h1>
        </div>
        <div class="about">
            <div class="about-img">
                <img src="../src/photo.jpeg" alt="">
            </div>
            <div class="aboutme">
                <h2>Обо мне</h2>
                <p>
                    <?php
                    $str_about ='20 лет.<br> Студентка 3 курса "Информационной безопасности".<br><br> Изучаю frontend-разработку. <br><br>Без ума от музыки и кинематографа. ';
                    $arr_about = explode('.', $str_about);
                    $arr_about[0] = "<span style='color: darkred'>$arr_about[0]</span>";
                    echo $new_about = implode('.', $arr_about);
                    ?>
                </p>
            </div>
            <div class="otzyv">
                <h2>Отзыв о Факт.Школе</h2>
                <p>
                    <?php
                    $str_otz = '&#171;Каждое занятие дает очередную порцию мотивации продолжать и дальше погружаться в изучение языков и принципов web-разработки&#187;';
                    $arr_otz = explode(' ', $str_otz);
                    foreach ($arr_otz as $value => $word){
                        if ($value % 2 == 0){
                            $arr_otz[$value] = "<span style='color: darkolivegreen'>$word</span>";
                        }else{
                            $arr_otz[$value] = "<span style='color: darkred'>$word</span>";
                        }
                    }
                    echo $new_otz = implode(' ', $arr_otz);
                    ?>
                </p>
            </div>
        </div>

        <h2>Последние рекомендации</h2>
        <h3>Посмотреть</h3>
        <div class="filmRecommend">
            <div class="film film1">
                <figure class="film-item">
                    <a href="https://www.kinopoisk.ru/film/630647/" target="_blank"><img src="../src/holymotors_.jpeg" alt="Святые моторы" title="Перейти на КиноПоиск"></a>
                    <figcaption>
                        <p>Holly Motors</p>
                    </figcaption>
                </figure>
            </div>
            <div class="film film2">
                <figure class="film-item">
                    <a href="https://www.kinopoisk.ru/film/466/" target="_blank"><img src="../src/mulholland.jpg" alt="Малхолланд Драйв" title="Перейти на КиноПоиск"></a>
                    <figcaption>
                        <p>Mulholland Drive</p>
                    </figcaption>
                </figure>
            </div>
            <div class="film">
                <figure class="film-item film3">
                    <a href="https://www.kinopoisk.ru/film/5492/" target="_blank"> <img src="../src/eternalsunshine.jpeg" alt="Вечное сияние чистого разума" title="Перейти на КиноПоиск"></a>
                    <figcaption>
                        <p>Eternal Sunshine of the Spotless Mind</p>
                    </figcaption>
                </figure>
            </div>
            <div class="film">
                <figure class="film-item film4">
                    <a href="https://www.kinopoisk.ru/film/484488/" target="_blank"><img src="../src/melan.jpg" alt="Меланхолия" title="Перейти на КиноПоиск"></a>
                    <figcaption>
                        <p>Melancholia</p>
                    </figcaption>
                </figure>
            </div>
            <div class="film">
                <figure class="film-item film5">
                    <a href="https://www.kinopoisk.ru/film/537136/" target="_blank"><img src="../src/place.jpeg" alt="Где бы ты ни был" title="Перейти на КиноПоиск"></a>
                    <figcaption>
                        <p>This Must Be the Place</p>
                    </figcaption>
                </figure>
            </div>
        </div>

        <h3>Послушать</h3>
        <div class="museRecommend">
            <div class="album1">
                <img src="../src/ninasimon.jpeg" alt="">
            </div>
            <div class="muse-name1">
                <p>"I Put A Spell On You"<br>Nina Simon</p>
            </div>

            <div class="album2">
                <img src="../src/BjorkPost.jpeg" alt="">
            </div>
            <div class="muse-name2">
                <p>"Post"<br>Bjork</p>
            </div>

            <div class="album3">
                <img src="../src/moby18.jpeg" alt="">
            </div>
            <div class="muse-name3">
                <p>"18"<br>Moby</p>
            </div>

            <div class="album4">
                <img src="../src/altj.jpeg" alt="">
            </div>
            <div class="muse-name4">
                <p>"An Awesome Waves"<br>alt-J</p>
            </div>

            <div class="album5">
                <img src="../src/joji.png" alt="">
            </div>
            <div class="muse-name5">
                <p>"BALLADS 1"<br>Joji</p>
            </div>

            <div class="album6">
                <img src="../src/rks.jpg" alt="">
            </div>
            <div class="muse-name6">
                <p>"Seven+Mary"<br>Rainbow Kitten Surprise</p>
            </div>

            <div class="album7">
                <img src="../src/pole.jpeg" alt="">
            </div>
            <div class="muse-name7">
                <p>"Поле Чудес"<br>Деревянные киты</p>
            </div>

            <div class="album8">
                <img src="../src/loqie.jpeg" alt="">
            </div>
            <div class="muse-name8">
                <p>"Сожги Этот Альбом"<br>Loqiemean</p>
            </div>
        </div>
    </main>
    <footer class="footer">
        <?php
        $alltext = $str_about.$str_otz;
        $words = explode(' ', $alltext);
//        print_r($words);
        echo "Количество слов: ".count($words) . "<br>";

        $glasn = preg_match_all('/[аеёоиуыэюя]/iu', $new_otz.$new_about);
        echo "Количество глассных: " . $glasn . "<br>";

        $birthday = '2001-06-14';
        $birthday_ts = strtotime($birthday);
//        echo $birthday_ts . "<br>";
        $days = (int)((time()-$birthday_ts)/(60*60*24));
        echo "Количество дней с моего дня рождения: " . $days;
        ?>
    </footer>
</div>
</body>
</html>