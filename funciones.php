<?php 
    $num=$_POST['num'];

    $nums1=array();
    for ($i=0; $i<$num ; $i++) { 
        $nums1[$i]=rand(0,100);
    }
    for ($i=0; $i <$num ; $i++) { 
        echo $nums1[$i].',';
    }


function NumeroMayor($nums1){
        $mayor=max($nums1);
      return $mayor;

}
echo "El numero mayor es".NumeroMayor($nums1);
echo'<br>';
function NumeroMenor($nums1){
    $menor=min($nums1);
  return $menor;
}
echo "El numero menor es".NumeroMenor($nums1);
echo'<br>';

    function prom($numeros){
        $sum=0;
        for ($i=0; $i <count($numeros) ; $i++) { 
            $sum+=$numeros[$i];
        }
        return $sum;
    }
    echo "el promedio es ".prom($nums1)/$num;
    ?>