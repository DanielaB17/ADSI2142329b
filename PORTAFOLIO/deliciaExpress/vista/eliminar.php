<?php
if (!isset($_GET["IdUsuarios"])) {
    exit("No hay id");
}
$mysqli = include_once "../modelo/conexion.php";
$id = $_GET["id"];
$sentencia = $mysqli->prepare("DELETE FROM usuarios WHERE IdUsuarios = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
header("Location: adminverusuarios.php");