>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo 'Iniciamos el trabajo de desarrollo con repos GIT <br>';
    function suma($numeros){
        $sum=0;
        for ($i=0; $i <count($numeros) ; $i++) { 
            $sum+=$numeros[$i];// $sum=$sum+$numeros[i]
        }
        return $sum;
    }

    $nums1=array();
    $nums2=[1,2,3,4,5,6,7,8,9];


    for ($i=0; $i<20 ; $i++) { 
        $nums1[$i]=rand(0,100);
    }
    //$suma=0;
    for ($i=0; $i <20 ; $i++) { 
        echo $nums1[$i].',';
        //$suma+=$nums[$i];
    }
//echo 'La suma es: '.$suma.'<br>';
echo 'la suma de num1 es ='.suma($nums1).'<br>';
echo 'la suma de num 2 es ='.suma($nums2).'<br>';

    ?>
</body>
</html>