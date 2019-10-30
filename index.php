<html>
    <head>
        <title>PHP</title>
        <style>
            .dice1{
                display:block;
                width:112px;
                height:112px;
                background-image: url("https://upload.wikimedia.org/wikipedia/commons/2/2c/Alea_1.png");
            }
            .dice2{
                display:block;
                width:112px;
                height:112px;
                background-image: url("https://upload.wikimedia.org/wikipedia/commons/b/b8/Alea_2.png");
            }
            .dice3{
                display:block;
                width:112px;
                height:112px;
                background-image: url("https://upload.wikimedia.org/wikipedia/commons/2/2f/Alea_3.png");
            }
           .dice4{
                display:block;
                width:112px;
                height:112px;
                background-image: url("https://upload.wikimedia.org/wikipedia/commons/8/8d/Alea_4.png");
            }
            .dice5{
                display:block;
                width:112px;
                height:112px;
                background-image: url("https://upload.wikimedia.org/wikipedia/commons/5/55/Alea_5.png");
            }
            .dice6{
                display:block;
                width:112px;
                height:112px;
                background-image: url("https://upload.wikimedia.org/wikipedia/commons/f/f4/Alea_6.png");
            }
        </style>
    </head>
    <body>
        <div class="dice<?php print rand(1,6) ?>">
        </div>
    </body>
</html>