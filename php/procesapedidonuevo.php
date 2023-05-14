<?php
include("conex.php");
//recibiendo datos
	$nombre = $_POST['nombre'];
	$apellido =  $_POST['apellido']; 
	$mensaje =  $_POST['mensaje']; 
	$telefono =  $_POST['tele']; 
	$correo =  $_POST['correo']; 
	$time =  $_POST['time']; 
	$fecha =  $_POST['fecha']; 

	session_start();
	$_SESSION['nombre_usuario']=$nombre;
	$_SESSION['correo']=$correo;

	//seguridad
	$nombre  = mysqli_real_escape_string($link, $_POST['nombre']);
	$correo  = mysqli_real_escape_string($link, $_POST['correo']);

	//verificar si existe el usuario
	$registros  = mysqli_query($link,"select * FROM pedidos WHERE nombre='$nombre'");
	$registros1 = mysqli_query($link,"select * FROM pedidos WHERE correo='$correo'");

	if      ($row = mysqli_fetch_array($registros)) {
	echo '<script languaje = "javascript">alert("usted ya nos contacto..")</script>';
	echo '<script languaje = "javascript">location.href="../contactos/index.html."</script>';
	}else if($row = mysqli_fetch_array($registros1)){
	echo '<script languaje = "javascript">alert("este correo ya nos contacto..")</script>';
	echo '<script languaje = "javascript">location.href="../contactos/index.html"</script>';	
	}else{
	//insertar el registro (consulta de insercion)
	mysqli_query($link, "insert into pedidos (nombre, apellido, mensaje, tele, correo, time,fecha) values ('$nombre','$apellido','$mensaje','$tele','$correo','$time','$fecha')");
 
	echo "<br>Pedido Exitoso";
	mysqli_close($link);
}
?>