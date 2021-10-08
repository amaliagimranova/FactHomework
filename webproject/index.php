<?php
//date_default_timezone_set("America/Los_Angeles"); //для проверки работы изменения тем
date_default_timezone_set("Europe/Moscow");
$time = date("H");
$cur_time = date("H:i");
echo "Текущее время: "."$cur_time";
if(8<=$time && $time<20){
    echo '<link rel="stylesheet" href="css/lightstyle.css">';
}else{
    echo '<link rel="stylesheet" href="css/darkstyle.css">';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
    <header>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="#">Обо мне</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Таблица</a></li>
            </ul>
        </nav>
        <ul class="nav nav-info">
            <li class="nav-item"><a class="nav-link" href="tel:+79613661256">8 (961) 366-12-56</a></li>
            <li class="nav-item"><a class="nav-link"
                                    href="mailto:amaliagimranova@yandex.ru">amaliagimranova@yandex.ru</a></li>
        </ul>
    </header>
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
                <img src="src/photo.jpeg" alt="">
            </div>
            <div class="aboutme">
                <h2>Обо мне</h2>
                <p>
                    20 лет.<br>Студентка 3 курса "Информационной безопасности".<br><br> Изучаю frontend-разработку. <br><br>
                    Без ума от музыки и кинематографа.
                </p>
            </div>
            <div class="otzyv">
                <h2>Отзыв о Факт.Школе</h2>
                <p>
                    &#171;Каждое занятие дает очередную порцию мотивации продолжать и дальше погружаться в изучение
                    языков и принципов web-разработки&#187;
                </p>
            </div>
        </div>

        <h2>Последние рекомендации</h2>
        <h3>Посмотреть</h3>
        <div class="filmRecommend">
            <div class="film film1">
                <figure class="film-item">
                    <a href="https://www.kinopoisk.ru/film/630647/" target="_blank"><img src="src/holymotors_.jpeg" alt="Святые моторы" title="Перейти на КиноПоиск"></a>
                    <figcaption>
                        <p>Holly Motors</p>
                    </figcaption>
                </figure>
            </div>
            <div class="film film2">
                <figure class="film-item">
                    <a href="https://www.kinopoisk.ru/film/466/" target="_blank"><img src="src/mulholland.jpg" alt="Малхолланд Драйв"  title="Перейти на КиноПоиск"></a>
                    <figcaption>
                        <p>Mulholland Drive</p>
                    </figcaption>
                </figure>
            </div>
            <div class="film">
                <figure class="film-item film3">
                    <a href="https://www.kinopoisk.ru/film/5492/" target="_blank"> <img src="src/eternalsunshine.jpeg" alt="Вечное сияние чистого разума" title="Перейти на КиноПоиск"></a>
                    <figcaption>
                        <p>Eternal Sunshine of the Spotless Mind</p>
                    </figcaption>
                </figure>
            </div>
            <div class="film">
                <figure class="film-item film4">
                    <a href="https://www.kinopoisk.ru/film/484488/" target="_blank"><img src="src/melan.jpg" alt="Меланхолия" title="Перейти на КиноПоиск"></a>
                    <figcaption>
                        <p>Melancholia</p>
                    </figcaption>
                </figure>
            </div>
            <div class="film">
                <figure class="film-item film5">
                    <a href="https://www.kinopoisk.ru/film/537136/" target="_blank"><img src="src/place.jpeg" alt="Где бы ты ни был" title="Перейти на КиноПоиск"></a>
                    <figcaption>
                        <p>This Must Be the Place</p>
                    </figcaption>
                </figure>
            </div>
        </div>

        <h3>Послушать</h3>
        <div class="museRecommend">
            <div class="album1">
                <img src="src/ninasimon.jpeg" alt="">
            </div>
            <div class="muse-name1">
                <p>"I Put A Spell On You"<br>Nina Simon</p>
            </div>

            <div class="album2">
                <img src="src/BjorkPost.jpeg" alt="">
            </div>
            <div class="muse-name2">
                <p>"Post"<br>Bjork</p>
            </div>

            <div class="album3">
                <img src="src/moby18.jpeg" alt="">
            </div>
            <div class="muse-name3">
                <p>"18"<br>Moby</p>
            </div>

            <div class="album4">
                <img src="src/altj.jpeg" alt="">
            </div>
            <div class="muse-name4">
                <p>"An Awesome Waves"<br>alt-J</p>
            </div>

            <div class="album5">
                <img src="src/joji.png" alt="">
            </div>
            <div class="muse-name5">
                <p>"BALLADS 1"<br>Joji</p>
            </div>

            <div class="album6">
                <img src="src/rks.jpg" alt="">
            </div>
            <div class="muse-name6">
                <p>"Seven+Mary"<br>Rainbow Kitten Surprise</p>
            </div>

            <div class="album7">
                <img src="src/pole.jpeg" alt="">
            </div>
            <div class="muse-name7">
                <p>"Поле Чудес"<br>Деревянные киты</p>
            </div>

            <div class="album8">
                <img src="src/loqie.jpeg" alt="">
            </div>
            <div class="muse-name8">
                <p>"Сожги Этот Альбом"<br>Loqiemean</p>
            </div>
        </div>
    </main>
</div>
</body>
</html>