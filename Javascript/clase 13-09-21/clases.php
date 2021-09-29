<?php
include ('animal.php');
class Ave extends Animal implements Locomocion{
    public $pico;
    public $pata;
    public function __construct($nombre,$clase,$pico,$pata){
        parent::__construct($nombre,$clase);
        $this->pico=$pico;
        $this->pata=$pata;
        }
        public function movimiento(){
            echo $this->nombre.'Se mueve por su pata'.$this->pata;
        }
        public function emitirSonido($sonido){
            echo $this->nombre.'hace'.$sonido;
        }
}
class Pez extends Animal implements Locomocion{
    public $familia;
    public $habitat;
    public function __construct($nombre,$clase,$familia,$habitat){
        parent::__construct($nombre,$clase);                 
        $this->familia=$familia;
        $this->habitat=$habitat;
        }
        public function movimiento(){
            echo 'Movimiento caracteristico de los peces de la famlia'.$this->familia;
            }
        public function emitirSonido($sonido){}
}
$tiburon=new Pez('Tiburon','Pez','cartilaginoso','oceano');
$paloma= new Ave('Paloma','ave','delgado','anisodactila');
$tiburon->movimiento();
$paloma->movimiento();
$paloma->emitirSonido('gorjeo');
?>