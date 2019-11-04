<?php

$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

if($grizai_velai){
    if($grizai_isgeres){
        $kaip = 'Grįžai vėlai ir išgėręs';
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