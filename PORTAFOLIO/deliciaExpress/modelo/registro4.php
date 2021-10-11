<?php
include("conexion.php");
$resultado=2;
if(isset($_POST['register'])){
	$nombres=($_POST['nombres']);
	$apellidos=($_POST['apellidos']);
	$email=($_POST['email']);
	$contrasena=md5($_POST['contrasena']);
    $rol=($_REQUEST['rol']);		
	  $consulta="INSERT INTO usuarios(NombreUsuarios,ApellidoUsuarios,EmailUsuarios,ContrasenaUsuarios,IdRoles) values('$nombres','$apellidos','$email','$contrasena','$rol')";
	  $resultado=mysqli_query($conn,$consulta);
session_start();
	  if($resultado==1){
	  	header("location:../vista/adminverusuarios.php?res=insertado");
	  }else{
	  	if($resultado<1){	  		
	  	header("location:../vista/regusua.php?res=error");
	  	}
	  }

}
mysqli_close($conn);
?>