var vec=(array,tam)=>{
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
document.write('el numero menor es:'+min(v));