<?php

    require_once 'conexion.php';

    $hisCli = $_GET['hisCli'];

    $sentencia = "SELECT * FROM pacientes WHERE hisCli='".$hisCli."' ";
    $registro = $mysqli->query($sentencia) or die (mysqli_error($mysqli));
    $dato=$registro->fetch_assoc();

    $query = "SELECT * FROM propietarios WHERE hisCli='".$hisCli."' ";
    $register = $mysqli->query($query) or die (mysqli_error($mysqli));
    $data=$register->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vet Pet Software</title>
    
    <link rel="preload" href="css/normalize.css" as="style"><link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/buscarpaciente.css" as="style">
    <link rel="stylesheet" href="css/buscarpaciente.css">
    <link rel="stylesheet" href="css/onOff.css">
    <script src="js/html2pdf.bundle.min.js"></script>
    <script src="js/convertirPDF.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="js/main.js"></script>
   
    <style>
        input:focus {
        outline: 2px;
        background-color: #fff7bb;
        border: solid 0.2rem #f6bc00;
        border-radius: 15px;
        }

    </style>
    <style>
        @page { margin: 0; }
    </style>
    
</head>

<body class="agrupar" >

<div id="element-to-print">

<!--------------"VISUALIZAR PROPIETARIO" ----------------------------->

                            <div class="flex alinear-der">
                                                            
                                        <form action="" method="POST">
                                                <a href="buscarPropietario.php">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" id="close-activar-pac" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#0D4251" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                                                <circle cx="12" cy="12" r="9" />
                                                                <path d="M10 10l4 4m0 -4l-4 4" />
                                                        </svg>
                                                </a>
                                        </form>
                        
                            </div>


                            <form class="fechayhora">
                                           
                                    <div class="fecha-vis-pac">
                                            <label>Fecha:</label>
                                            <input class="input-date" type="date" value="<?php $fecha = new DateTime('now', new DateTimeZone('America/Bogota'));echo date('Y-m-d');?>" readonly>
                                    </div>        
                                        
                            </form> 
                  

                            <div class="contenedorhc">
                

                                    <form class="historiaclinica">
                                            <div>
                                                <label>Historia Clínica</label><br>
                                                <input type="" name="visHistoria" value="<?php echo $dato['hisCli'];  ?>" readonly>
                                            </div>
                                    </form>

                            </div>


<!----------"VISUALIZAR PROPIETARIO - CONTENEDOR PROPIETARIO"---------->

                            <div class="propietario-vis-pac">


                                        <div class="datos-propietario-vis-pac">
                                            <h2>Datos Propietario</h2>
                                        </div>

                                                <form class="formulario2">


                                                        <div class="contenedor-infopropietario-vis-pac">  

                                                            <div class="campo2">
                                                                <label>Nombres:</label>
                                                                <input class="input-text" type="text" placeholder="" value="<?php echo $data['nomPro'];  ?>" readonly>
                                                            </div>

                                                            <div class="campo2">
                                                                <label>Apellidos:</label>
                                                                <input class="input-text" type="text" placeholder="" value="<?php echo $data['apePro'];  ?>" readonly>
                                                            </div>

                                                            <div class="campo2">
                                                                <label>Tipo de documento:</label>
                                                                <input class="input-text" type="text" placeholder=" "value="<?php echo $data['tipDoc'];  ?>" readonly>
                                                            </div>

                                                            <div class="campo2">
                                                                <label>Número de documento:</label>
                                                                <input class="input-text" type="text" placeholder="" value="<?php echo $data['docPro'];  ?>" readonly>
                                                            </div>

                                                            <div class="campo2">
                                                                <label>Dirección:</label>
                                                                <input class="input-text" type="text" placeholder="" value="<?php echo $data['dirPro'];  ?>" readonly>
                                                            </div>

                                                            <div class="campo2">
                                                                <label>Municipio:</label>
                                                                <input class="input-text" type="text" placeholder="" value="<?php echo $data['munPro'];  ?>" readonly>
                                                            </div>

                                                            <div class="campo2">
                                                                <label>Celular:</label>
                                                                <input class="input-text" type="text" placeholder="" value="<?php echo $data['celPro'];  ?>" readonly>
                                                            </div>

                                                            <div class="campo2">
                                                                <label>E-mail:</label>
                                                                <input class="input-text" type="text" placeholder="" value="<?php echo $data['emaPro'];  ?>" readonly>
                                                            </div>
                                                            
                                                        </div> <!--contenedor-infopropietario-->
                                                </form>

                            </div>

<!----------"VISUALIZAR PROPIETARIO - CONTENEDOR PACIENTE"---------->

                            <div class="paciente-vis-pac">

                            <div class="datos-paciente-vis-pac">

                                <h2>Datos Paciente</h2>

                            </div>


                            <form class="formulario1">

                                    <div class="contenedor-infopaciente-vis-pac">   

                                                <div class="contenedor-imagen flex">

                                                        <figure >
                                                            <img  class="fotoMascota" src="data:image/jpg;base64,<?php echo base64_encode($dato['fotPac']); ?>" readonly>
                                                        </figure>

                                                </div>

                                                <div class="campo1">
                                                    <label>Nombre:</label>
                                                    <input class="input-text" type="text" name="visNombre" value="<?php echo $dato['nomPac'];  ?>" readonly>
                                                </div>

                                                <div class="campo1">
                                                    <label>Especie:</label>
                                                    <input class="input-text" type="text" name="visEspecie" value="<?php echo $dato['espPac'];  ?>" readonly>
                                                </div>
                                                <div class="campo1">
                                                    <label>Raza:</label>
                                                    <input class="input-text" type="text" name="visRaza" value="<?php echo $dato['razPac'];  ?>" readonly>
                                                </div>
                                                <div class="campo1">
                                                    <label>Sexo:</label>
                                                    <input class="input-text" type="text" name="sexo" value="<?php echo $dato['sexPac'];  ?>" readonly>
                                                </div>
                                                <div class="campo1">
                                                    <label>Fecha de Nacimiento:</label>
                                                    <input class="input-text" type="date" name="visNacimiento" value="<?php echo $dato['fecNam'];  ?>" readonly>
                                                </div>
                                                <div class="campo1">
                                                    <label>Color:</label>
                                                    <input class="input-text" type="text" name="visColor" value="<?php echo $dato['colPac'];  ?>" readonly>
                                                </div>
                                                <div class="campo1">
                                                    <label>Última atención:</label>
                                                    <input class="input-text" type="date" name="visUltAtencion" value="<?php echo $dato['ultAte'];  ?>" readonly>
                                                </div>

                                        
                                    </div> <!--Contenedor-infopaciente--> 

                            </form>

                            </div>


                                        <div class="contenedor-logo-vis-pac" id="element-to-print">
                                            <img src="img/logohospital.png" alt="" class="imagen1"/>
                                            <img src="img/leyenda.png" alt=""class="imagen2"/>
                                        </div>


                                        <div class="contenedor-info-veterinaria">
                                            <p class="parrafo-info-vet">
                                                    Dirección: Transversal 23 b - Bis N° 26 -23 <br>
                                                    Manila II Sector - Fusagasugá <br>
                                                    Contacto 300 767 2316   -  311 441 2405 <br>
                                            </p>
                                        </div>

                                        <div class="contenedor-btns-vis-pac">

                                                <form action="" method="POST">
                                                    <div class="btn2">
                                                        <button type="submit" id="btnCrearExcel">Excel</button>
                                                    </div>
                                                </form>

                                                    <div class="btn2">
                                                        <button type="submit" id="btnCrearPdf">PDF</button>
                                                    </div>
                                    
                                        </div>

                                  


</div>
</body>
</html>
