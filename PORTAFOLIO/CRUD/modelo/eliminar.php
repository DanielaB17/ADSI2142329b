<?php
    //print_r($_GET);
    if (!isset($_GET['id'])) {
        //exit();
        header("Location: index.php");
    }

    $eliminar = $_GET['id'];
    include '../modelo/conexion.php';
    $sentencia = $bd->prepare("DELETE FROM usuarios WHERE IdUsuarios = ?; ");
    $resultado = $sentencia->execute([$eliminar]);

    if ($resultado === TRUE) {
        echo "Datos eliminados";
        header("Location: ../vista/index.php");
    } else {
        echo "No se pudo eliminar";
    }
?>