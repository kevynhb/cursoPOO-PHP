<?php 

    class Caneca{

        var $cor;
        var $liquido;
        var $alca;
        var $volume;

        function temLiquido() {
            if ($this->liquido == "" && $this->volume == 0 ){
                echo "Não tem bebida na minha caneca";
            } else {
                echo "Tem bebida na minha caneca";
            }
        }
        function pegarCaneca() {
            $this->alca = true;
        }

    }

?>