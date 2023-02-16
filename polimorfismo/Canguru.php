<?php 
require_once 'Mamifero.php';

class Canguru extends Mamifero {
    

    public function usarBolsa() {
        echo "<p>Usando Bolsa</p>";
    }
    public function locomover() {
        echo "<p>Pulando</p>";
    }
}

?>