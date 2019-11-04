<?php

$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

if($grizai_velai == 0 && $grizai_isgeres == 0){
    $h2 = 'Nieko nepadarei';
} elseif($grizai_velai == 1 && $grizai_isgeres == 0) {
    $h2 = 'Grįžai vėlai';
} elseif($grizai_velai == 0 && $grizai_isgeres == 1){
    $h2 = 'Grįžai išgėręs';
} else {
    $h2 = 'Grįžai vėlai ir išgėręs';
}

$h1 = 'Buitinė skaičiuoklė';

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