//SUMA
function llenarVector(vector, tam){
    for (let i=0; i<tam; i++){
        vector.push(Math.round(Math.random()*100));
    }
  return vector;  
}
let vec =new Array();
let x=5;
console.log(llenarVector(vec,x));
console.log(vec[0]);
console.log('La suma de los pares es: '+sumaPares(vec));
console.log('La suma de los impares es: '+sumaImpares(vec));
//HOISTING
function sumaPares(vector){
    let suma=0;
    for (let i=0; i<vector.length; i++){
        if (vector[i]%2==0){
            suma+=vec[i];
        }
    }
  return suma;
}
function sumaImpares(vector){
    let suma=0;
    for (let i=0; i<vector.length; i++){
        if (vector[i]%2!=0){
            suma+=vec[i];
        }
    }
  return suma;
}

//console.log(Math.round(Math.random()*100));


//console.log(Math.round(Math.random()*100));



//console.log(Math.round(Math.random()*100));


/*function llenarVector(vector, tam){
    for (let i=0; i<tam; i++){
        vector.push(Math.round(Math.random()*100));
    }
  return vector;  
}
let vec =new Array();
let x=5;
console.log(llenarVector(vec,x));

//console.log(Math.round(Math.random()100));/




/*let vec=new Array();
console.log(vec.length);
vec.push('texto');
console.log(vec.length);
console.log(vec);
vec.push(120);
console.log(vec);
vec.unshift('fin');
console.log(vec);
vec.shift();
vec.pop();
console.log(vec);*/




//vec let const
//let vec=new Array();
//vec=[0]='texto';
//let vec=[];
//vec[4]=120;