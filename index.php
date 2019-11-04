<?php
$sunny = rand(0, 1);

if ($sunny) {
    $img_src = 'https://icon-library.net/images/weather-icon-sunny/weather-icon-sunny-15.jpg';
    $h2 = 'Saulėta';
} else {
    $img_src = 'https://icon-library.net/images/cloudy-icon/cloudy-icon-27.jpg';
    $h2 = 'Debesuota';
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

            .bg_img{
                width: 150px;
                height: 150px;
                background-image: url("<?php print $img_src ?>");
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="flex">
            <div class="bg_img"></div>
            <h2><?php print $h2 ?></h2>
        </div>
    </body>
</html>