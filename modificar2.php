<?php
	include 'conexion.php';
	ModificarUsuario($_POST['no'], $_POST['id'], $_POST['correo'], 
	$_POST['contraseña'], $_POST['nombre'], $_POST['estado'], 
	$_POST['identificador'], $_POST['hora'], $_POST['rol'], 
	$_POST['descripcion'] );

    
		function ModificarUsuario($no, $id, $cor, $pas, $usu, $est, $ide, $hor, $ro, $descrip)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE usuarios SET 
        id='".$id."', 
        correo='".$cor."', 
        pass='".$pas."',
        usu='".$usu."',
        Estado='".$est."',
        identificador='".$ide."',
        Hora='".$hor."',
        Rol='".$ro."',
        Descripcion='".$descrip."' WHERE no='".$no."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

 <script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href='informacion.php';
</script>  