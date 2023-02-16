<?php 
require_once 'Animal.php';

class Mamifero extends Animal {
    private $corPelo;
    
    // Não tem palavra para sobrepor, apenas use a mesma assinatura
    public function locomover() {
        echo "<p>Correndo</p>";
    }
    public function alimentar() {
        echo "<p>Mamando</p>";
    }
    public function emitirSom() {
        echo "<p>som de Mamifero</p>";
    }

    function getCorPelo() {
        return $this->corPelo;
    }
    function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}


?>