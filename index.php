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
    $badWord = '***';
?>
    <h1><?php $title ?></h1>
    <p><?php echo $testo . " lughezza= " . strlen($testo) ?></p>
    <h2> <? echo $_GET['badWord'] ?></h2>
</body>
</html>