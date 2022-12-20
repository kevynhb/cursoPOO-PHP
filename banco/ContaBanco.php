<?php 

    Class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        function __construct()
        {
            $this->setSaldo(0);    
            $this->setStatus(false);   
            echo "<p>Conta criada com sucesso! </p>";
        }
        public function abrirConta($t) {
            $this->setTipo($t);
            $this->setStatus(true);
            
            if ($t == "CC"){
                $this->setSaldo(50);
            }else if ($t = "CP") {
                $this->saldo = 150; // duas formas de fazer a atribuir valor
            }
        }
        public function fecharConta() {
            if($this->getSaldo() > 0){
                echo "<p>Conta ainda tem dinheiro</p>"; // Imprimir texto somente para fins 
            }elseif ($this->getSaldo() < 0) {
                echo "Não foi possível fechar a conta, está em débito";
            }else {
                $this->setStatus(false);
                echo "<p>Conta de " . $this->getDono() . "fechada com sucesso </p>";
            }
        }
        public function depositar($v) {
            // $this->saldo += ; add variavel contendo valor que vier do index
            if($this->getStatus()) { //se getStatus for verdadeiro faça {}
                $this->setSaldo($this->getSaldo() + $v);
                echo "<p>Depósito de R$ $v na conta de " . $this->getDono() . "</p>";
            }else {
                echo "<p>Conta fechada. Não consigo depositar.</p>";
            }
        }
        public function sacar($v) {
            if($this->getStatus()) {
                if ($this->getSaldo() > $v) {
                    $this->setSaldo($this->getSaldo() - $v);
                    echo "<p>Saque de $v autorizado na contada de " . $this->getDono() . "</p>";
                }else {
                    echo "Saldo insuficiente para saque.";
                }
            }else {
                echo "Não posso sacar de uma conta fechada";
            }
        }
        public function pagarMensal() {
            if($this->getTipo() == "CC") {
                $v = 12;
            }else if($this->getTipo() == "CP") {
                $v = 20;
            }
            if($this->getStatus()) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Mensalidade de R$ $v debitada na conta de ". $this->getDono() . "</p>";
            }else {
                echo "Problemas com a conta. Não posso cobrar.";
            }
        }

        // Métodos Especiais
        public function getnumConta() {
            return $this->numConta;
        }
        public function setnumConta($n) {
            $this->numConta = $n;
        }
        public function getTipo() {
            return $this->tipo;
        }
        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }
        public function getDono() {
            return $this->dono;
        }
        public function setDono($dono) {
            $this->dono = $dono;
        }
        public function getSaldo() {
            return $this->saldo;
        }
        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }
        public function getStatus() {
            return $this->status;
        }
        public function setStatus($status) {
            $this->status = $status;
        }
    }
?>