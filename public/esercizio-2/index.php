<?php

$title = "Esercizio 2";

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>
        <?php
        echo $title
            ?>
    </title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 200px;
            padding: 40px;
        }
        label {
            margin-bottom: 5px;
        }
        input {
            max-width: 10px 0;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>Form Esempio</h1>
    <form method="post" action="esercizio-1/form.php">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Inserire il nome">

        <label for="cognome">Cognome</label>
        <input type="text" name="cognome" id="cognome" placeholder="Inserire il cognome">

        <input type="submit" value="Invia dati">
    </form>

    <?php if (1 > 5): ?>
    Ciao sono il primo

    <?php else: ?>
    Ops sono il secondo

    <?php endif; ?>
</body>

</html>