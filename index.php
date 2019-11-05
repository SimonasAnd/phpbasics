<?php
$months = 12;
$wallet = 1000;
$month_income = 700;

for ($i = 1; $i <= $months; $i++) {
    $month_expenses = rand(600, 1000);
    $wallet += $month_income - $month_expenses;
    if($wallet <= 0){
        $month = $i;
        break;
    }
}

if($wallet <= 0){
    $h2 = "Atsargiai, $month mėnesį gali baigtis pinigai!";
} else {
    $h2 = "Po $months m., prognozuojamas likutis: $wallet";
}

$h1 = 'Wallet Forecast';

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

    
    

