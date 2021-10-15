<?php
    //print_r($_GET);
    if (!isset($_GET['id'])) {
        //exit();
        header("Location: index.php");
    }

    include '../modelo/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("SELECT * FROM usuarios WHERE IdUsuarios = ?;");
    $sentencia->execute([$id]);
    $usuario = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($usuario);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuarios</title>
</head>
<body>
    <center>
        <h2 id="h2">Editar usuarios</h3>
        <form method="POST" action="../modelo/editar.php">
            <table>
                    <tr>
                        <td>Nombre </td>
                        <td><input type="text" name="nombres" value="<?php echo $usuario->NombreUsuarios ?>"></td>
                    </tr>
                    <tr>
                        <td>Apellido </td>
                        <td><input type="text" name="apellidos" value="<?php echo $usuario->ApellidoUsuarios ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value="<?php echo $usuario->EmailUsuarios ?>"></td>
                    </tr>
                    <tr>
                        <td>Contraseña</td>
                        <td><input type="text" name="contrasena" value="<?php echo $usuario->ContrasenaUsuarios ?>"></td>
                    </tr>
                    <tr>
                    <input type="hidden" name="register">
                    <input type="hidden" name="id2" value="<?php echo $usuario->IdUsuarios ?>">
                    <br>
                    <td><input type="submit" value="Guardar Cambios" id="cambios"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>