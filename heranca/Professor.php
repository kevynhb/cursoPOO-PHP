<?php 
require_once 'Pessoa.php';

class Professor extends Pessoa {
    private $especialidade;
    private $salario;

    public function receberAumento($aum) {
        $this->salario += $aum;
    }

    public function getEspecialidade() {
        $this->especialidade;
    }
    public function getSalario() {
        $this->salario;
    }
    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }
    public function setSalario($salario) {
        $this->salario = $salario;
    }
}


?>