<?php
include("conexion.php");
$registro=mysqli_query($conn,"select IdUsuarios from usuarios");
while($reg=mysqli_fetch_array($registro)){
$resultado=2;
if(isset($_POST['register'])){
	  $consulta="DELETE FROM usuarios WHERE IdUsuarios=['IdUsuarios']";
	  $resultado=mysqli_query($conn,$consulta);
	  }
    }
mysqli_close($conn);
?>