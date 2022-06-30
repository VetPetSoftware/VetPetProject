<?php
//Para registrar
include('conexion.php');

$id = $_POST["id"];
$correo = $_POST["txtcorreo"];
$pass 	= $_POST["txtpassword"];
$usu 	= $_POST["txtnombre"];
$Estado =$_POST['Estado'];
$identificador =$_POST['identificador'];
$Hora =$_POST['Hora'];
$Rol = $_POST['Rol'];
$Descripcion =$_POST['Descripcion'];

$queryusuario 	= mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo = '$correo'");
$nr 			= mysqli_num_rows($queryusuario); 

if ($nr == 0)
{
	$queryregistrar = "INSERT INTO usuarios ( id, correo, pass, usu, Estado, identificador, Hora, Rol,	Descripcion) 
    values ( '$id','$correo','$pass','$usu','$Estado','$identificador','$Hora','$Rol','$Descripcion')";
	

if(mysqli_query($conexion,$queryregistrar))
{
	echo "<script> alert('Usuario registrado: $usu');window.location= 'informacion.php' </script>";
}
else 
{
	echo "Error: " .$queryregistrar."<br>".mysql_error($conexion);
}

}
else
{
		echo "<script> alert('No puedes registrar este correo: $correo');window.location= 'informacion.php' </script>";
}



// $Estado =$_POST['Estado'];
// $identificador =$_POST['identificador'];
// $Hora =$_POST['Hora'];
// $Rol = $_POST['Rol'];
// $Descripcion =$_POST['Descripcion'];
//Estado, identificador, Hora, Rol,	Descripcion
//,'$Estado','$identificador','$Hora','$Rol','$Descripcion'
