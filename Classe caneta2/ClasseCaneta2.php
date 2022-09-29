<?php 

    class Caneta2 {
        //---------------------ATRIBUTOS-------------------------------------
        public $modelo;
        private $cor;
        private $ponta;
        private $tampada;

        //----------------------MÉTODOS--------------------------------------
        // public function __construct() //tudo que eu colocar aqui dentro será executado automáticamente
        // {
        //     $this->cor = "Azul";
        //     $this->tampar();
        // }
        public function __construct($m,$c,$p) 
        {
            // $this->setModelo($m); //outra maneira de escrever
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;
            $this->tampar(); // já começa tampada por causa do método construtor
        }

        public function tampar() {
            $this->tampada = true;
        }
        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($m) {
            $this->modelo = $m;
        }
        public function getPonta() {
            return $this->ponta;
        }
        public function setPonta($p) {
            $this->ponta = $p;
        }
    }

?>