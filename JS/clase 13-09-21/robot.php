<?php
include('animal.php');
class Robot implements Locomocion{
    public $tipo;
    public function __construct($tipo){
        $this->tipo=$tipo;
    }
    public function emitirSonido($sonido){
        echo 'Los robots tipo '.$this->tipo.' emiten sonido de '.$sonido;
    }
    public function movimiento(){
        echo ' Su movimiento es propio de los robots '.$this->tipo;
    }
}
$r2d2=new Robot('Drone');
$r2d2->emitirSonido('aspas de vuelo');
$r2d2->movimiento();
?>