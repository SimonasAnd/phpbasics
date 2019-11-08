<?php
$kiausai = rand(1, 1);
?>
<html>
    <head>
        <title>PHP</title>
        <style>
            .container{
                width: 60%;
                margin: 0 auto;
            }
            
            .kiausrakulas-img{
                background-image: url("./assets/images/full_kiausas.png");
                width: 467.5px;
                height: 470.5px;
                background-size: cover;
                position: relative;
            }
            
            .poz{
                width: 209px;
                height: 207px;
                background-size: cover;
                position: absolute;
                top: 131px;
                left: 129px;
            }
            
            .kiaus-1{
                background-image: url("./assets/images/kiaus_1.png");
            }
            
            .flex-column{
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            
            nav{
                margin-top: 50px;
                width: 100%;
            }
            
            .flex-justify-around{
                display:flex;
                justify-content: space-between;
            }
            
            nav a{
                font-size: 30px;
                text-decoration: none;
                color: black;
            }
            
        </style>
    </head>
    <body>
        <div class="container flex-column">
            <h1>Kiaušrakulas</h1>
            <div class="kiausrakulas-img">
                <div class="poz kiaus-<?php print $kiausai ?>"></div>
            </div>
            <nav class="flex-justify-around">
                <a href="index.php">Home</a>
                <a href="kiausrakulas.php">Kiaušrakulas</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
            </nav>
        </div>
    </body>
</html>