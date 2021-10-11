<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones flecha</title>
    <link rel="stylesheet" href="../estilos/estilo1.css">
</head>
<body>
<div id="script"><script src="func.js"></script></div>
    <div id="di1">FUNCIONES FLECHA</div><br>
    <nav>
                <ul>
                    <a href="../index.php#se1"><li>Inicio</li></a>
                    <a href="../index.php#se2"><li>Mis Proyectos</li></a>
                    <a href="../index.php#se3"><li>Javascript</li></a>
                    <a href="../manual.php"><li>Manual de usuario</li></a>
                    <a href="../deliciaExpress/vista/adminverusuarios.php" target="blank"><li>CRUD</li></a>
                </ul>
            </nav>
    <pre>var vec=(array,tam)=>{
    for (let i = 0; i < tam; i++) {
        array.push(Math.round(Math.random()*100));
        
    }
    return array;
}
v=[];
x=5;
document.write('Flecha: '+vec(v,x)+'<br><br>');


//Suma del array
var sum=v=>{
    let suma=0;
    for (let i = 0; i< v.length; i++) {
        suma+=v[i];
    }  
    return suma; 
}
document.write('Suma: '+ sum(v)+'<br><br>');

//Promedio del array
var prom=(v,x)=>{
    let promedio=0;
    for (let i = 0; i< v.length; i++) {
        promedio+=v[i]/x;
    }  
    return promedio; 
}
document.write('Promedio: '+ prom(v,x)+'<br><br>');

//Mayor del array

var max =v=>Math.max(...v);
document.write('el numero mayor es:'+max(v)+'<br><br>');


//Menor del array
var min =v=>Math.min(...v);
document.write('el numero menor es:'+min(v));</pre>
</body>
</html>