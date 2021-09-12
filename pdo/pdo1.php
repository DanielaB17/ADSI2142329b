  
<?php 
//PDO= PHP data objects
//dsn= data source name
$dsn='mysql:host=localhost;dbname=adsi';
$user='root';
$psw='';
$conexion='a';
try{
$conexion=new PDO($dsn,$user,$psw);
$statement=$conexion->prepare("select * from aprendiz ORDER BY nombre");
$statement->execute();
}
catch(PDOException $e){
echo $e->getMessage();
}
foreach ($statement as $key ) {
    echo 'Nombre: '.$key['nombre'].' - ';
    echo 'Documento: '.$key['documento'].' - ';
    echo 'Formacion: '.$key['formacion'].' - ';
    echo 'Genero: '.$key['sexo'].'<br>';
}
echo '<br>----------------------orden-------------------------------<br>';
$statement->execute();
while ($key=$statement->fetch()) {
    echo $key['nombre'].'<br>';
}

echo '<br>-----------------------------------------------------<br>';
$statement->execute();
$resultados=$statement->fetchAll();
//var_dump($resultados);
foreach ($resultados as $key) {
    echo $key['documento'].'<br>';
}
echo '<br>-----------------------num------------------------------<br>';
$statement->execute();
while ($key=$statement->fetch(PDO::FETCH_NUM)) {
    echo $key[0].'<br>';
}
echo '<br>----------------------asociativo------------------------------<br>';
$statement->execute();
while ($key=$statement->fetch(PDO::FETCH_ASSOC)) {
    echo $key['nombre'].'<br>';
}
echo '<br>----------------------objetos------------------------------<br>';
$statement->execute();
while ($key=$statement->fetch(PDO::FETCH_OBJ)) {
    echo $key->documento.'<br>';
    echo $key->nombre.'<br>';
}

$statement=$conexion->prepare("insert into aprendiz values ('Simon Bolivar','556655','adsi','M')");
$statement->execute();
// foreach ($statement as $key ) {
//     echo 'Nombre: '.$key[0].' - ';
//     echo 'Documento: '.$key[1].' - ';
//     echo 'Formacion: '.$key[2].' - ';
//     echo 'Genero: '.$key[3].'<br>';
// }

//var_dump($statement);
//print_r($statement);
?>