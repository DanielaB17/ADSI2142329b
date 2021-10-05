function llenarVector(arreglo,tam){
    for (let i = 0; i < tam; i++) {
       arreglo.push(Math.round(Math.random()*100));    
    function llenarVector(arreglo, tam) {
      for (let i = 0; i < tam; i++) {
        arreglo.push(Math.round(Math.random() * 100));
      }
      return arreglo;
    }
    return arreglo;
    }
    let vec=new Array();
    let x=10;
    llenarVector(vec,x);
    let vec = new Array();
    let x = 10;
    llenarVector(vec, x);
    console.log(vec);
    vec.pop();
    console.log(vec);
    @@ -24,5 +24,3 @@ console.log(vec);
    // console.log(vec[1]);
    // vec=new Array();
    // let vec1=new Array();