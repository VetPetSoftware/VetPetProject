<?php

    if(!isset($_POST['oculto'])){
        header('Location: buscarPropietario.php');;
    }

    include_once 'conexion.php';
    /*$fotPac = addslashes(file_get_contents($_FILES['fotPac']['tmp_name']));*/

//INFORMACIÓN ENVIADA POR EL FORMULARIO//

    $nomPac = $_POST['nomPac'];
    $espPac = $_POST['espPac'];
    $sexPac = $_POST['sexPac'];
    $razPac = $_POST['razPac'];
    $fecNam = $_POST['fecNam'];
    $colPac = $_POST['colPac'];
    $ultAte = $_POST['ultAte']; 

    $nomPro = $_POST['nomPro'];
    $apePro = $_POST['apePro'];
    $tipDoc = $_POST['tipDoc'];
    $docPro = $_POST['docPro'];
    $dirPro = $_POST['dirPro'];
    $munPro = $_POST['munPro'];
    $celPro = $_POST['celPro'];
    $emaPro = $_POST['emaPro'];
    /*$hisCli = $_POST['hisCli'];*/
    
    
//ACTUALIZAR TABLA PACIENTE//

    $sentencia = $mysqli->prepare("INSERT INTO pacientes(nomPac, espPac, sexPac, razPac, fecNam, colPac, ultAte) VALUES (?,?,?,?,?,?,?)");

    $sentencia->bind_param($nomPac, $espPac, $sexPac, $razPac, $fecNam, $colPac, $ultAte);

    $sentencia->execute();

    //ACTUALIZAR TABLA PROPIETARIO//

   
    $query = $mysqli->prepare("INSERT INTO propietarios(nomPro, apePro, tipDoc, docPro, dirPro, munPro, celPro, emaPro) VALUES (?,?,?,?,?,?,?,?)");

    $query->bind_param($nomPro, $apePro, $tipDoc, $docPro, $dirPro, $munPro, $celPro, $emaPro);

    $query->execute();

?>