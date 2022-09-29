<?php 

    Class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        function __construct()
        {
            $this->status = false;    
            $this->saldo = 0;    
        }
        public function abrirConta() {
            $this->status = true;
            if ($this->tipo == "CC"){
                $this->saldo = 50;
            }else {
                $this->saldo = 150;
            }
        }
        public function fecharConta() {
            if($this->saldo == 0){

            }else {
                echo "Não foi possível fechar a conta, tem saldo ou débito ativo";
            }
        }
        public function depositar() {
            // $this->saldo += ; add variavel contendo valor que vier do index
        }
        public function sacar() {
            // $this->saldo -= ;
        }
        public function pagarMensal() {
            
        }

    }


?>