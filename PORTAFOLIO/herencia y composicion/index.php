<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herencia y Composicion</title>
    <link rel="stylesheet" href="../estilos/estilo3.css">
</head>
<body>
<div id="script"><script src="hc.js"></script></div>
    <div id="di1">HERENCIA Y COMPOSICION</div><br>
    <nav>
                <ul>
                    <a href="../index.php#se1"><li>Inicio</li></a>
                    <a href="../index.php#se2"><li>Mis Proyectos</li></a>
                    <a href="../index.php#se3"><li>Javascript</li></a>
                    <a href="../manual.php"><li>Manual de usuario</li></a>
                    <a href="../deliciaExpress/vista/adminverusuarios.php" target="blank"><li>CRUD</li></a>
                </ul>
            </nav>
            <pre>class Empleados {
    constructor(idEmpleados,NombreEps,idRoles){
        this._idEmpleados=idEmpleados;
        this._NombreEps=NombreEps;
        this._idRoles=idRoles;
    }
    set idEmpleados(idEmpleados){
        this._idEmpleados=idEmpleados;
    }
    get idEmpleados(){
        return this._idEmpleados;
    }
    set NombreEps(NombreEps){
        this._NombreEps=NombreEps;
    }
    get NombreEps(){
        return this._NombreEps;
    }
    set idRoles(idRoles){
        this._idRoles=idRoles;
    }
    get idRoles(){
        return this._idRoles;
    }
    
}

class Cocineros extends Empleados{
    constructor(idCocineros,EspecialidadCocineros,idEmpleados,NombreEps,idRoles){
        super(idEmpleados,NombreEps,idRoles);
        this._idCocineros=idCocineros;
        this._EspecialidadCocineros=EspecialidadCocineros;
    }
    set idCocineros(idCocineros){
        this._idCocineros=idCocineros;
    }
    get idCocineros(){
        return this._idCocineros;
    }
    set EspecialidadCocineros(EspecialidadCocineros){
        this._EspecialidadCocineros=EspecialidadCocineros;
    }
    get EspecialidadCocineros(){
        return this._EspecialidadCocineros;
    }
    infoCompleta2(){
        return this._idCocineros+'<br> '+this._EspecialidadCocineros+'<br> '+this._idEmpleados
        +'<br> '+this._NombreEps+'<br> '+this._idRoles;
    }
   
}
class Usuarios{
    constructor(idUsuarios,NombreUsuarios,ApellidoUsuarios,EmailUsuarios,ContrasenaUsuarios,grupo){
        this._idUsuarios=idUsuarios;
        this._NombreUsuarios=NombreUsuarios;
        this._ApellidoUsuarios=ApellidoUsuarios;
        this._EmailUsuarios=EmailUsuarios;
        this._ContrasenaUsuarios=ContrasenaUsuarios;
        this._grupo=grupo;
    }
    set idUsuarios(idUsuarios){
        this._idUsuarios=idUsuarios;
    }
    get idUsuarios(){
        return this._idUsuarios;
    }
    set NombreUsuarios(NombreUsuarios){
        this._NombreUsuarios=NombreUsuarios;
    }
    get NombreUsuarios(){
        return this._NombreUsuarios;
    }
    set ApellidoUsuarios(ApellidoUsuarios){
        this._ApellidoUsuarios=ApellidoUsuarios;
    }
    get ApellidoUsuarios(){
        return this._ApellidoUsuarios;
    }
    set EmailUsuarios(EmailUsuarios){
        this._EmailUsuarios=EmailUsuarios;
    }
    get EmailUsuarios(){
        return this._EmailUsuarios;
    }
    set ContrasenaUsuarios(ContrasenaUsuarios){
        this._ContrasenaUsuarios=ContrasenaUsuarios;
    }
    get ContrasenaUsuarios(){
        return this._ContrasenaUsuarios;
    }
    infoCompleta1(){
        return this._idUsuarios+'<br>'+this._NombreUsuarios+'<br>'+this._ApellidoUsuarios
        +'<br>'+this._EmailUsuarios+'<br>'+this._ContrasenaUsuarios;
    }
   
}
var obj1=new Usuarios(33,'Raul','Sanchez','rsanchez@gmial.com','1234');
var obj2=new Cocineros(1,'Chef Grillardin o de parrilla',2,'Sanitas',4);
var misusuarios=[];
misusuarios.push(obj2);
usuario=new Usuarios(misusuarios);

document.write(obj1.infoCompleta1()+' '+obj2.infoCompleta2());</pre>
</body>
</html>