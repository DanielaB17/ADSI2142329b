<?php
    include '../modelo/conexion.php';
    $sentencia = $bd->query("SELECT * FROM usuarios;");
    $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
    /*fetchAll guardar en formato de objeto 
    FETCH_OBJ sea de tipo objeto*/
   // print_r($contacto);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIOS</title>
    <link rel="stylesheet" href="../estilos/estilo19.css">
</head>
<body>
        <table>
        <strong><h2>USUARIOS</h2></strong>
            <tr id="header">
                <td><strong>Id</strong></td>
                <td><strong>Nombre</strong></td>
				<td><strong>Apellido</strong></td>
                <td><strong>Correo</strong></td>
                <td><strong>Contraseña</strong></td>
				<td><strong>Id Rol</strong></td>
                <td><strong>Accion</strong></td>
            </tr>
            <?php
                foreach ($usuarios as $dato) {
                    ?>
                    <tr>
                        <td><?php echo $dato->IdUsuarios; ?></td>
                        <td><?php echo $dato->NombreUsuarios; ?></td>
                        <td><?php echo $dato->ApellidoUsuarios; ?></td>
                        <td><?php echo $dato->EmailUsuarios; ?></td>
						<td><?php echo $dato->ContrasenaUsuarios; ?></td>
						<td><?php echo $dato->IdRoles; ?></td>
                        <td><a href="editar.php?id=<?php echo $dato->IdUsuarios; ?>" id="editar">Editar</a>
                        <a href="../modelo/eliminar.php?id=<?php echo $dato->IdUsuarios; ?>" id="eliminar">Eliminar</a></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
        <!-- inicio insert -->
            <hr>
            <form method="POST" action="insertar.php">
			<button id="boton">Crear nuevo usuario</button></a>
            </form>
</body>
</html>