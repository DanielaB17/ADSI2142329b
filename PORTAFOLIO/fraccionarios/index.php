<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fraccionarios</title>
    <link rel="stylesheet" href="../estilos/estilo1.css">
</head>
<body>
    <div id="script"><script src="fracc.js"></script></div>
    <div id="di1">FRACCIONARIOS</div><br>
    <nav>
                <ul>
                    <a href="../index.php#se1"><li>Inicio</li></a>
                    <a href="../index.php#se2"><li>Mis Proyectos</li></a>
                    <a href="../index.php#se3"><li>Javascript</li></a>
                    <a href="../manual.php"><li>Manual de usuario</li></a>
                    <a href="../CRUD/vista/index.php" target="blank"><li>CRUD</li></a>
                </ul>
            </nav>

            <pre>
    var frac={
    n1:1,
    n2:2,
    d1:2,
    d2:3,
    suma:function(){
        numeradorS1=this.n1 * this.d2;
        numeradorS2=this.n2 * this.d1;
        numeradorSF=numeradorS1 + numeradorS2;
        denominadorS=this.d1 * this.d2;
        return 'el resultado de la suma es '+ numeradorSF + ' / ' + denominadorS+"<br><br>";;
    },
    resta:function(){
        numeradorR1=this.n1 * this.d2;
        numeradorR2=this.n2 * this.d1;
        numeradorRF=numeradorS1 - numeradorS2;
        denominadorR=this.d1 * this.d2;
        return 'el resultado de la resta es '+ numeradorRF + ' / ' + denominadorR+"<br><br>";;
    },
    multi:function(){
        numeradorM1=this.n1 * this.n2;
        numeradorM2=this.d1 * this.d2;
        return 'el resultado de la multiplicacion es '+ numeradorM1 + ' / ' +numeradorM2+"<br><br>";
    },
    divi:function(){
        numeradorD1=this.n1 * this.d2;
        numeradorD2=this.n2 * this.d1;
        return 'el resultado de la division es '+ numeradorD1 + ' / ' +numeradorD2;
    }
}

document.write(frac.suma());

document.write(frac.resta());

document.write(frac.multi());

document.write(frac.divi());</pre>
</body>
</html>