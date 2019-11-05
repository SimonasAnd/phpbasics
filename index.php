<?php
$days = 365;
$pack_price = 3.5;
$count_ttl = 0;

for($i = 1; $i <= $days; $i++){
    $busima_diena = date('w', strtotime("+$i days"));
    if($busima_diena == 0){
        $cigs_sun = rand(1, 3);
        $count_ttl += $cigs_sun;
    } elseif($busima_diena == 6){
        $cigs_sat = rand(10, 20);
        $count_ttl += $cigs_sat;
    } else{
        $cigs_mon_fri = rand(3, 4);
        $count_ttl += $cigs_mon_fri;
    }
}

$price_ttl = round(ceil($count_ttl / 20) * $pack_price, 2);

$h1 = 'Mano dūmų skaičiuoklė';
$h2 = "Per $days dienas, surūkysiu $count_ttl cigarečių už $price_ttl eur.";
?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
    </body>
</html>




