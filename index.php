<?php
$car_price_new = 3000;
$depreciation = 2;
$car_price_used = $car_price_new;
$santaupos = 1500;

for ($months = 0; $car_price_used > $santaupos; $months++) {
    $car_price_used *= 1 - $depreciation / 100;
}

$depr_perc = round(100 - (100 * $car_price_used / $car_price_new), 0);
$car_price_used = round($car_price_used, 2);

$kupiura = array(500, 200, 100, 50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1, 0.05, 0.02, 0.01);
$like_pinigai = $car_price_used;

$h1 = 'Kiek nuvertės mašina?';
$h2 = "Naujos mašinos kaina: $car_price_new";
$h3 = "Mašiną galėsi nupirkti po $months mėn., kai jos vertė bus: $car_price_used eur.";
$h4 = "Mašina nuvertės $depr_perc proc.";
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <h4><?php print $h4; ?></h4>
        <p>
            <?php for ($ar = 0; $like_pinigai; $ar++): ?>
                <?php if ($like_pinigai / $kupiura[$ar]): ?>
                    <?php $kup_kart = floor($like_pinigai / $kupiura[$ar]);?>
                    <?php for ($kkk = 1; $kkk <= $kup_kart; $kkk++): ?>
                        <?php print " $kupiura[$ar]";?>
                        <?php $like_pinigai = round($like_pinigai - $kupiura[$ar], 2); ?>
                    <?php endfor; ?>
                <?php endif; ?>
            <?php endfor; ?>
        </p>
    </body>
</html>