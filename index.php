<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Portfolio Kamil Langer</title>
    <meta name="description" content="Portfolio młodego web developera Kamila Langer.">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/snackbar.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/snackbar.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="header"><a href="index.php"><h2>Kamil Langer</h2><h8>Junior web developer.</h8></a></div>
        </div>
        <div class="row">
            <a href="omnie.php" class="four columns">
                <div class="wtile"><!-- O mnie -->
                    <i class="icon-user"></i>
                    <h4>O mnie</h4>
                </div>
            </a>
            <a href="projekty.php" class="four columns">
                <div class="wtile"><!-- Moje projekty -->
                    <i class="icon-th-list"></i>
                    <h4>Moje projekty</h4>
                </div>
            </a>
            <a href="kontakt.php" class="four columns">
                <div class="wtile"><!-- Kontakt -->
                    <i class="icon-chat"></i>
                    <h4>Kontakt</h4>
                </div>
            </a>
        </div>
        <div class="row" style="text-align: center;"><!-- Media społecznościowe -->
            <a href="https://www.facebook.com/kamil.langer.official" class="three columns" target="_blank">
                <div class="mspol" style="background-color: #003399;">
                    <i class="icon-facebook"></i>
                </div>
            </a>
            <a href="https://github.com/camzu1998" class="three columns" target="_blank">
                <div class="mspol" style="background-color: #262626;">
                    <i class="icon-github-text"></i>
                </div>
            </a>
            <a href="https://www.instagram.com/dynamic_snickers/" class="three columns" target="_blank">
                <div class="mspol" style="background-color: #990033;">
                    <i class="icon-instagram"></i>
                </div>
            </a>
            <a href="https://www.youtube.com/channel/UCDarRx0y7_YALAp3f-GVNoA" class="three columns" target="_blank">
                <div class="mspol" style="background-color: #FF0033;">
                    <i class="icon-youtube"></i>
                </div>
            </a>
        </div>
    </div>
    <footer id="footer">Wykonał: Kamil Langer &copy; kamillanger4@gmail.com</footer>
    <div id="snackbar"><span id="tekst"></span></div>
    <?php
    if(isset($_SESSION['wyslano'])){
        ?><script>openSnackbar();</script><?php
    }
    unset($_SESSION['wyslano']);
    ?>
</body>
</html>
