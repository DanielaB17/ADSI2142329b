<?php
    if (!isset($_POST['register'])) {
        exit();
    }

    include 'conexion.php';
    $id2 = $_POST['id2'];
    $nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$email=$_POST['email'];
	$contrasena=md5($_POST['contrasena']);


    $sentencia = $bd->prepare("UPDATE usuarios SET NombreUsuarios=?,ApellidoUsuarios=?,EmailUsuarios=?,ContrasenaUsuarios=? WHERE IdUsuarios=?");
    $resultado = $sentencia->execute([$nombres,$apellidos,$email,$contrasena,$id2]);

    if ($resultado === TRUE) {
        header("location:../vista/index.php?res=insertado");
    } else {
        header("location:../vista/editar.php?res=error");
    }
?>