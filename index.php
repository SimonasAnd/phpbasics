<?php

$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

if(!$grizai_velai && !$grizai_isgeres){
    $kaip = 'Nieko nepadarei';
} elseif($grizai_velai && !$grizai_isgeres) {
    $kaip = 'Grįžai vėlai';
} elseif(!$grizai_velai&& $grizai_isgeres){
    $kaip = 'Grįžai išgėręs';
} else {
    $kaip = 'Grįžai vėlai ir išgėręs';
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