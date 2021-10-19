<?php
//date_default_timezone_set("America/Los_Angeles"); //для проверки работы изменения тем
date_default_timezone_set("Europe/Moscow");
function styleChange()
{
    $time = date("H");
    if (8 <= $time && $time < 20) {
        echo '<link rel="stylesheet" href="../css/light.css">';
    } else {
        echo '<link rel="stylesheet" href="../css/dark.css">';
    }
}
styleChange();
