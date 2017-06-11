<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Portfolio Kamil Langer</title>
    <meta name="description" content="Portfolio młodego web developera Kamila Langer.">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="css/fontello.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="header"><a href="index.php"><h2>Kamil Langer</h2><h8>Junior web developer.</h8></a></div>
        </div>
        <p>Nr tel: 799777675</p>
        <p>Adres: Kłodawa Bohaterów Września 9/14</p>
        <div class="row" style="text-align: center;">
            <form action="mail.php" method="post">
                <div class="row">
                    <div class="six columns"><input type="text" placeholder="Twoje imię i nazwisko" name="name" class="u-full-width" required></div>
                    <div class="six columns"><input type="email" placeholder="Twój email" name="email" class="u-full-width" required></div>
                </div>
                <input type="text" placeholder="Wiadomość" name="comment" class="u-full-width" required>
                <input type="submit" value="Wyślij">
            </form>
        </div>
    </div>
    <footer id="footer">Wykonał: Kamil Langer &copy; kamillanger4@gmail.com</footer>
</body>
</html>
