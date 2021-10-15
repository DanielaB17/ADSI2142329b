<?php
    if (!isset($_POST['register'])) {
        exit();
    }

    include 'conexion.php';
    $nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$email=$_POST['email'];
	$contrasena=md5($_POST['contrasena']);
    $rol=$_REQUEST['rol'];


    $sentencia = $bd->prepare("INSERT INTO usuarios(NombreUsuarios,ApellidoUsuarios,EmailUsuarios,ContrasenaUsuarios,IdRoles) values('$nombres','$apellidos','$email','$contrasena','$rol')");
    $resultado = $sentencia->execute([$nombres,$apellidos,$email,$contrasena,$rol]);

    if ($resultado === TRUE) {
        header("location:../vista/index.php?res=insertado");
    } else {
        header("location:../vista/insertar.php?res=error");
    }
?>