<?php
$countDay = 1;
$json = file_get_contents("http://api.openweathermap.org/data/2.5/forecast?id=498817&lang=ru&type=like&units=metric&cnt=$countDay&APPID=aaf40f14eb307dd01cf5c26e5c2b1784");
$data = json_decode($json, true);


if ($data) {
    $data1 = $data["list"][0]["main"];
    $dayTime = $data["list"][0]["dt_txt"];
    $vlag = $data1["humidity"];
    $opisanie = $data["list"][0]['weather'][0]['description'];
    $gorod = $data["city"]['name'];
//$iconka = $data["list"][0]['weather'][0]['icon'];
    $temp = $data1["temp"];
    $speed = $data["list"][0]['wind']['speed'];
//$napr = $data["list"][0]['wind']["deg"];
    $temp = round($temp);

    echo 'город : ' . $gorod . '<br />';
    echo 'погода на : ' . $dayTime . '<br />';
    echo 'температура : ' . $temp . '°' . '<br />';
    echo 'облачность : ' . $opisanie . '<br />';
    echo 'влажность : ' . $vlag . ' %' . '<br />';
    echo 'скорость ветра : ' . $speed . ' м\с' . '<br />';
} else {
    echo "Что-то пошло не так..";
}
















