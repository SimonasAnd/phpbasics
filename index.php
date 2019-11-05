<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);
$katasuniai = 0;


for ($i = 1; $i <= $kates; $i++) {
    for($s = 1; $s <= $sunys; $s++){
        $pavyko = rand(0, 1);
        if($pavyko){
            $katasuniai++;
            break;
        }
    }
}

$h1 = 'Katašunių Išeiga';
$h2 = "Dalyvavo $kates katės ir $sunys šunys";
$h3 = "Katašunių išeiga: $katasuniai";

?>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
    </body>
</html>