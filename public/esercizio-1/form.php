<?php

    echo "Ciao " . $_POST["nome"] . " " . $_POST["cognome"];

    function saluta() {
        $GLOBALS["hello"] = "Andrea"; // scope globale
        echo $GLOBALS["hello"];
    }

    define("indirizzo", "via della chiesa");
    const ADDRESS = "Viale Europa";

    saluta();
    echo $nome;

?>