<?php 
class Material{
private $tipoMaterial='';
private $codigo='';
private $autor='';
private $titulo='';
private $año=0;
private $status='';

function __construct($tipoMaterial,$codigo,$autor,$titulo,$año,$status){
$this->tipoMaterial=$tipoMaterial;
$this->codigo=$codigo;
$this->autor=$autor;
$this->titulo=$titulo;
$this->año=$año;
$this->status=$status;
}

 function datos(){
     return 'TIPO DE MATERIAL: '.$this->tipoMaterial.'<br>'. 'CODIGO: '.$this->codigo.'<br>'. 'AUTOR: '.$this->autor.'<br>'. 'TITULO: '.$this->titulo.'<br>'. 'AÑO: '.$this->año.'<br>'. 'STATUS: '.$this->status;
 }

}
?>
