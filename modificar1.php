<?php
  
  $consulta=ConsultarUsuario($_GET['no']);

  function ConsultarUsuario( $no_usu)
  {
   include 'conexion.php';
   $sentencia="SELECT * FROM usuarios WHERE no='".$no_usu."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
  
    $fila['id'],
    $fila['correo'],
    $fila['pass'],
    $fila['usu'],
    $fila['Estado'],
    $fila['identificador'],
    $fila['Hora'],
    $fila['Rol'],
    $fila['Descripcion']
            
   ];
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Usuario</title>
<style type="text/css">
@import url("css/mycss.css");
</style>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Usuario</h1> </span>
  		<br>
	  <form action="modificar2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="no"  value="<?php echo $_GET['no']?>">
  		<label>Id Usuario: </label>
  		<input type="text" id="id" name="id" value="<?php echo $consulta[0] ?>" ><br>
  		
  		<label>Correo: </label>
  		<input type="text" id="correo" name="correo" value="<?php echo $consulta[1] ?>"><br>
  		
        <label>Contraseña: </label>
  		<input type="text" id="contraseña" name="contraseña" value="<?php echo $consulta[2] ?>"><br>

        <label>Nombre: </label>
  		<input type="text" id="nombre" name="nombre" value="<?php echo $consulta[3] ?>"><br>
        
        <label>Estado: </label>
  		<input type="text" id="estado" name="estado" value="<?php echo $consulta[4] ?>"><br>
        
        <label>Acceso identificador: </label>
  		<input type="text" id="identificador" name="identificador" value="<?php echo $consulta[5] ?>"><br>
        
        <label>Acceso Hora: </label>
  		<input type="text" id="hora" name="hora" value="<?php echo $consulta[6] ?>"><br>

        <label>Rol: </label>
  		<input type="text" id="rol" name="rol" value="<?php echo $consulta[6] ?>"><br>

  		<label>Descripcion: </label>
  		<textarea style="border-radius: 10px;" rows="3" cols="50" name="descripcion"> <?php echo $consulta[7] ?>  </textarea><br>
  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
  


</div>


</body>
</html>