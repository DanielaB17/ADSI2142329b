<?php 
function sumaDivisores($num){
    $sum=0;
    if (is_numeric($num)) {
        for ($i=0; $i<=$num ; $i++) {
            if ($num%$i==0) {
                $sum+=$i;
            }
    }
    return $sum;    
    }else{
        throw new Exception('El dato ingresado debe ser un número');
        //return 0;
    }
}

//echo sumaDivisores('?');
try{
    echo sumaDivisores(9);
 }
 catch(Exception $e){
 echo $e->getMessage();
 }
 catch(DivisionByZeroError $ob){
     echo $ob->getMessage();
 }
echo 'Última linea del código';
?>