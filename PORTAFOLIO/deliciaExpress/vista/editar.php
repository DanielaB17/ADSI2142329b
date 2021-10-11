<?php
$mysqli = include_once "../modelo/conexion.php" ;

$sentencia = $mysqli->prepare("SELECT IdUsuarios, NombreUsuarios,ApellidoUsuarios,EmailUsuarios,ContrasenaUsuarios,IdRoles FROM usuarios WHERE IdUsuarios = ?");
if ( isset($_POST['register']) ) {
    $id = $_GET['IdUsuarios'];
}

$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
$usuario = $resultado->fetch_assoc();
if (!$usuario) {
    exit("No hay resultados para ese ID");
}

?>
<div class="row">
    <div class="col-12">
        <h1>Actualizar usuario</h1>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $usuario["IdUsuarios"] ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input value="<?php echo $usuario["NombreUsuarios"] ?>" placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <textarea placeholder="Apellido" class="form-control" name="apellido" id="apellido" cols="30" rows="10" required><?php echo $apellido["ApellidoUsuarios"] ?></textarea>
            </div>
            <div class="form-group">
                <label for="email">email</label>
                <textarea placeholder="email" class="form-control" name="email" id="email" cols="30" rows="10" required><?php echo $email["EmailUsuarios"] ?></textarea>
            </div>
            <div class="form-group">
                <label for="contraseña">contraseña</label>
                <textarea placeholder="contraseña" class="form-control" name="contraseña" id="contraseña" cols="30" rows="10" required><?php echo $contrasena["ContrasenaUsuarios"] ?></textarea>
            </div>
            <div class="form-group">
                <label for="rol">rol</label>
                <textarea placeholder="rol" class="form-control" name="rol" id="rol" cols="30" rows="10" required><?php echo $rol["IdRoles"] ?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-warning" href="adminverusuarios.php">Volver</a>
            </div>
        </form>
    </div>
</div>
