<!DOCTYPE html>
<html lang="es">
<head>
	<title>DELICIA EXPRESS</title>	
	<link rel="stylesheet" type="text/css" href="../estilos/estilo19.css">
	<meta charset="utf-8">
	<meta name="keywords" content="ingredientes,comida,platos,hamburguesas,rapidas">
	<meta name="description" content="Esta pagina trata de una aplicacion interactiva que permite al usuario crear su propio plato, el cliente arrastra los ingredientes y se va formando su plato">
	<meta name="author" content="Juan Pablo Doncel">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
</head>
<body>
<header>
	<h1 id="tit">ADMINISTRADOR</h1>
	<nav>
		<a class="l1" href="inicioadmin.php">INICIO</a>
	    <a class="l1" href="adminverusuarios.php">VER USUARIOS</a>
	</nav>	
</header>	
<?php
include("../modelo/conexion.php");

?>
<div>
<h1 id="subt" align="center">Listado de usuarios</h1>
<table >
	<tr id="tr1">
    <td>Id Usuarios</td>
    <td>Nombres </td>
    <td>Apellidos</td>
    <td>Email</td>
    <td>Contraseña</td>
    <td>Rol</td>
	<td>Accion</td>
    </tr>

    <?php	
	$registro=mysqli_query($conn,"select IdUsuarios,NombreUsuarios,ApellidoUsuarios,EmailUsuarios,ContrasenaUsuarios,IdRoles from usuarios") or die("Problemas en la consulta: " .mysqli_error($conn));
	?>

	<?php
	while($reg=mysqli_fetch_array($registro)){	
	?>

	<tr>
		<td><?php echo $reg['IdUsuarios'] ?></td>
		<td><?php echo $reg['NombreUsuarios'] ?></td>
		<td><?php echo $reg['ApellidoUsuarios'] ?></td>
		<td><?php echo $reg['EmailUsuarios'] ?></td>
		<td><?php echo $reg['ContrasenaUsuarios'] ?></td>
		<td><?php echo $reg['IdRoles'] ?></td>
		<td>
		<form method="post" action="editar.php"> 
			<input class="b1" type="submit" id="m" name="register" value="Editar">
			</form>
			<form method="post" action="eliminar.php"> 
			<input class="b1" type="submit" id="m" name="register" value="Eliminar">
			</form>
		</td>
	</tr>
		
	<?php
    }
	?>

</table>
<a href="regusua.php"><button>Crear nuevo usuario</button></a>
</div>

<?php
mysqli_close($conn);

?>
</body>
</html>