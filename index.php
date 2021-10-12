<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
<?php
    $title = 'Welcome php';
    $testo = 'Creare una variabile con un paragrafo di testo a vostra scelta (possibilmente corposo). Stampare a schermo il paragrafo e la sua lunghezza. Una parola da censurare viene passata dall\'utente tramite parametro GET.';
    $replace = '***';
    $search = ['una', 'con', 'un', 'di', 'a'];
    $newTesto = str_replace($search, $replace, $testo);
?>
    <h1><?php $title ?></h1>
    <p><?php echo $testo . " lughezza= " . strlen($testo) ?></p>
    <h2> Parola inserita con GET = <? echo $_GET['word'] ?></h2>
    <p><?php echo $newTesto ?></p>
</body>
</html>