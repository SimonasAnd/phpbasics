<?php
$sunny = rand(0, 1);
$rainy = rand(0, 1);

if ($sunny) {
    $weather_class = 'sunny';
    $h2 = 'Saulė';
} else {
    if ($rainy) {
        $weather_class = 'rainy';
        $h2 = 'Debesuota su lietum';
    } else {
        $weather_class = 'cloudy';
        $h2 = 'Debesuota';
    }
}
?>
<html>
    <head>
        <title>PHP</title>
        <style>
            .flex{
                display: flex;
                align-items: center;
            }

            .img-size{
                width: 200px;
                height: 200px;
                background-size: cover;
            }

            .sunny{
                background-image: url("https://www.clipartwiki.com/clipimg/detail/320-3204945_sun-sunny-day-weather-symbol-brightness-icon.png");
            }

            .rainy{
                background-image: url("https://image.flaticon.com/icons/png/512/106/106059.png");
            }

            .cloudy{
                background-image: url("https://icons-for-free.com/iconfiles/png/512/cloudy+foggy+weather+icon-1320196574869514194.png");
            }
        </style>
    </head>
    <body>
        <div class="flex">
            <div class="<?php print $weather_class; ?> img-size"></div>
            <h2><?php print $h2; ?></h2>
        </div>
    </body>
</html>