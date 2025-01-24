<?php 

class Persona
{
    public $nome;
    public $cognome;

    public function __construct($nome, $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }
}

$persona_1 = new Persona("Davide", "Bossotto");
echo $persona_1->nome;

?>