<?php

require_once 'conexion.php';

$idEsp = $_POST['idEsp'];
$idEsp = trim($idEsp);

$sql = "SELECT * FROM raza WHERE idEsp = '$idEsp' ORDER BY lisRaza DESC";
$register = $mysqli->query($sql);

$html = "<option value ='-1' disabled='disabled'>Seleccionar raza</option>";

while($raza = mysqli_fetch_array($register)) 
    {
        $html = "<option value='".$raza['idRaza']."'>".$raza['lisRaza']."</option>";
    }

echo $html;

?>