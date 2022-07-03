<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Informacion</title>
<style type="text/css">
@import url("CSS/mycss.css");
</style>
<link rel="stylesheet" href="CSS/informacion.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="agrupar">
<div class="todo">
    
  <div id="contenido">
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead class="contenedor">
        <th>No.</th>
        <th>Id</th>
  			<th>Correo</th>
  			<th>Contraseña</th>
  			<th>Nombre</th>
  			<th>Estado</th>
        <th>Acceso identificador</th>
        <th>Acceso Hora</th>
        <th>Rol</th>
        <th>Descripcion</th>

  			<th> <a href="crearUsuario.html"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>

      <?php
        include "conexion.php";
        $sentecia="SELECT * FROM usuarios";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
          echo "<tr>";
            echo "<td>"; echo $fila['no']; echo "</td>";
            echo "<td>"; echo $fila['id']; echo "</td>";
            echo "<td>"; echo $fila['correo']; echo "</td>";
            echo "<td>"; echo $fila['pass']; echo "</td>";
            echo "<td>"; echo $fila['usu']; echo "</td>";
            echo "<td>"; echo $fila['Estado']; echo "</td>";
            echo "<td>"; echo $fila['identificador']; echo "</td>";
            echo "<td>"; echo $fila['Hora']; echo "</td>";
            echo "<td>"; echo $fila['Rol']; echo "</td>";
            echo "<td>"; echo $fila['Descripcion']; echo "</td>";

            echo "<td><a href='modificar1.php?no=".$fila['no']."'> <button type='button' class='btn btn-success'>Modificar</button> </a></td>";
            echo " <td><a href='eliminar.php?no=".$fila['no']."'> <button type='button' class='btn btn-danger'>Eliminar</button> </a></td>";
          echo "</tr>";
        }


        

      ?>


  	</table>
  </div>
  
</div>
     
<div class="iconos">
<a class="boton1" href="home.html">
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-big-left" width="47" height="47" viewBox="0 0 24 24" stroke-width="1.5" stroke="#00000" fill="none" stroke-linecap="round" stroke-linejoin="round">
<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
<path d="M20 15h-8v3.586a1 1 0 0 1 -1.707 .707l-6.586 -6.586a1 1 0 0 1 0 -1.414l6.586 -6.586a1 1 0 0 1 1.707 .707v3.586h8a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1z" />
</svg>
</a>
</div>

</body>
</html>