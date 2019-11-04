<?php

$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);
$kurmiegosi = 'nemiegosi';

if($grizai_velai){
    if($grizai_isgeres){
        $kaip = 'Grįžai vėlai ir išgėręs';
        $kurmiegosi = 'miegosi';
    } else {
        $kaip = 'Grįžai vėlai';
    }
} else {
    if($grizai_isgeres){
        $kaip = 'Grįžai išgėręs';
    } else {
        $kaip = 'Nieko nepadarei';
    }
}



$h1 = 'Buitinė skaičiuoklė';
$h2 = "Situacija: $kaip";
$h3 = "Išvada: $kurmiegosi ant sofos";

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