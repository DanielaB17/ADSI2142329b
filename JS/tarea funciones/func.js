var vec=(array,tam)=>{
    for (let i = 0; i < tam; i++) {
        array.push(Math.round(Math.random()*100));
        
    }
    return array;
}
v=[];
x=5;
console.log('Flecha: '+vec(v,x));

//Suma del array
var sum=v=>{
    let suma=0;
    for (let i = 0; i< v.length; i++) {
        suma+=v[i];
    }  
    return suma; 
}
console.log('Suma: '+ sum(v));

//Promedio del array
var prom=(v,x)=>{
    let promedio=0;
    for (let i = 0; i< v.length; i++) {
        promedio+=v[i]/x;
    }  
    return promedio; 
}
console.log('Promedio: '+ prom(v,x));

//Mayor del array

var max =v=>Math.max(...v);
console.log('el numero mayor es:'+max(v));


//Menor del array
var min =v=>Math.min(...v);
console.log('el numero menor es:'+min(v));