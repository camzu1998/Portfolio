<?php
session_start();
$text = $_POST['comment'];
$mail = $_POST['mail'];
$name = $_POST['name'];
$mymail = 'kamillanger4@gmail.com';
$subject = 'Portfolio';
$header = 'From: '.$mail."";
mail($mymail, $subject, $text, $header);
$_SESSION['wyslano']=1;
header('Location: index.php');
?>
