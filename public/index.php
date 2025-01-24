<?php

require_once __DIR__ . "./../vendor/autoload.php";

$nome = "Stefano";
$anno_corrente = date("Y");

function saluta($nome)
{
    return "Ciao, $nome";
}


$eta = 32;
$anno_nascita = $anno_corrente - $eta;

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>First Project of Php</title>
</head>

<body>
    <h1><?php echo saluta($nome); ?></h1>
    <p>Benvenuto nel mio progetto PHP!</p>

    <?php
    if ($eta >= 18) {
        echo "<p>Sei maggiorenne.</p>";
    } else {
        echo "<p>Non sei maggiorenne.</p>";
    }
    ?>

    <p>Anno di nascita: <?php echo $anno_nascita ?></p>
</body>

</html>