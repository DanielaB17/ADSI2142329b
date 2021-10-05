var num=(array, size)=>{
    for (var i = 0; i < size; i++) {
        array.push(Math.round(Math.random()*100));
    }
    return array;
}
var nom=new Array();

var t=5;

console.log('numbers... '+num(nom,t));

console.log(nom[0]);

var plus=(array)=>{
    var suma=0;
    for(var i = 0; i < array.length; i++) {
        suma+=nom[i];
    }
    return suma;
}

console.log('adition... '+plus(nom));

var prome=(array)=>{
    var suma=0;
    var pro=0;
    for (var i = 0; i < array.length; i++) {
        suma += nom[i];        
    }
  pro = suma / array.length;
    return pro;
}
console.log('prome... '+prome(nom)); 