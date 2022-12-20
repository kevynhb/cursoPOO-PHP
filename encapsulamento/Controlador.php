<?php 

interface Controlador {
    // Métodos abaixo são Abstratos, pois é uma interface e essa é sua natureza.
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMundo();
    public function play();
    public function pause();

}