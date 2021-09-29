//FUNCION FLECHA SIN PARAMETROS
//VERSION CLASICA
function sinParametros(){
    return 'Hola Mundo';
}
console.log(sinParametros());
//VERSION CLASICA
var sinParam=()=>'Hola Mundo';
console.log('Flecha: '+sinParam());


//FUNCION FLECHA CON UN PARAMETRO
//VERSION CLASICA
function cuadrado(num) {
    return num*num;
}
console.log(cuadrado(10));
//VERSION FLECHA
var r=num=>num*num;
console.log('Flecha= '+r(5));




//FUNCION FLECHA CON MAS DE UN PARAMETRO
//VERSION CLASICA
function suma(n,m) {
    return n+m;
}
console.log(suma(10,20));
//VERSION FLECHA
var sumar=(n,m)=>n+m;
console.log('Flecha= '+sumar(20,30));


//LLENAR UN ARREGLO CON FLECHA
var vec=(array,tam)=>{
    for (let i = 0; i < tam; i++) {
        array.push(Math.round(Math.random()*100));
    }
    return array;
}
v=[];
x=5;
console.log('Flecha= '+vec(v,x));



//SUMAR PARES CON FLECHA
var vec=(array,tam)=>{
    for (let i = 0; i < tam; i++) {
        array.push(Math.round(Math.random()*100));
    }
    return array;
}
v=[];
x=5;
console.log('Flecha= '+vec(v,x));
console.log('La suma de los pares es: '+sumaPares(vec));
console.log('Flecha= '+sumar(20,30));
var sumar=(n,m)=>n+m;
for (let i=0; i<array.length; i++){
    if (array[i]%2==0){
        suma+=v[i];
    }
}
return sumar;