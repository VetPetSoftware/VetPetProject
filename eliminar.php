<?php
	EliminarUsuario($_GET['no']);

	function EliminarUsuario($no)
	{
		include 'conexion.php';
		$sentencia="DELETE FROM usuarios WHERE no='".$no."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("Usuario Eliminado!!");
	window.location.href='informacion.php';
</script>