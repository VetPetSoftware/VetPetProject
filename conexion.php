<?php
	$conexion= new mysqli("localhost", "root", "", "vetsoftware");
	//Comprobar conexion
	if(mysqli_connect_errno())
	{
		printf("Fallo la conexion");
	}
	else {
		//printf("Estas conectado");
	}
?>


<!-- ?php
$db_host="localhost";
$db_user="";
$db_password="";
$db_name="vetsoftware";
$db_table_name="usuarios";

$db_connection = mysql_connect($db_host, $db_user, $db_password, $db_name);

if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}
?> -->




<!--?php

$conn= mysqli_connect("localhost","root","","vetsoftware");

?>  -->