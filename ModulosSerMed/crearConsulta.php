<?php

require_once 'conexion.php';

$sentencia = "SELECT * FROM pacientes P JOIN consulta C ON P.hisCli = C.hisCli";
$registros = $mysqli->query($sentencia) or die (mysqli_error($mysqli));
$dato=$registros->fetch_assoc();

$query = "SELECT * FROM propietarios O JOIN pacientes P ON O.hisCli = P.hisCli";
$register = $mysqli->query($query) or die (mysqli_error($mysqli));
$data=$register->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VPS - Módulo Consulta</title>
    
    <link rel="preload" href="css/normalize.css" as="style"><link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link rel="preload" href="css/crearconsulta.css" as="style">
    <link rel="stylesheet" href="css/crearconsulta.css">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/main.js"></script>

</head>
<body class="agrupar">
    <main>

        <section>
               <div class="seccion-buscar">
                    
                    <form class="buscador" action="" method="POST">

                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                  <circle cx="10" cy="10" r="7" />
                                  <line x1="21" y1="21" x2="15" y2="15" />
                            </svg>
                                
                            <input class="busqueda" type="search" placeholder="">

                        </div>

                        <div class="btn2">
                            <button type="submit">Buscar</button>
                        </div>

                    </form>   
                    

                        <form class="fechayhora" action="" method="POST">
                            <div class="contenedorfyh">
                                <div class="fecha">
                                        <label>Fecha:</label>
                                        <input class="input-date" type="date" value="<?php date_default_timezone_set("America/Bogota");echo date('Y-m-d');?>" readonly>
                                </div>
                                <div class="hora">
                                        <label>Hora:</label>
                                        <input class="input-date" type="time" value="<?php date_default_timezone_set("America/Bogota"); echo date('H:i')?>" readonly>
                                </div>
                            </div>
                        </form>       
             </div>

                <div class="contenedorhc">
                    
                    <form class="historiaclinica" action="" method="POST">
                            <div>
                                <label>Historia Clínica</label><br>
                                <input type="" name="visHistoria" value="<?php echo $dato['hisCli'];  ?>" readonly>
                            </div>
                    </form>

                </div>

        </section>


        <section>

            <div class="paciente">

                    <div class="datos-paciente">

                        <h2>Datos Paciente</h2>

                        <div class="iconos-paciente flex alinear-derecha">

                                <form action="" method="POST">
                                    <a href="../ModulosCrear/crearPaciente/visualizarPaciente.php?hisCli=<?php echo $dato['hisCli'];?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-pac" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#0D4251" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                              <circle cx="12" cy="12" r="2" />
                                              <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                        </svg>
                                    </a>
                                </form>

                                <form action="" method="POST">
                                    <a href="../ModulosCrear/crearPaciente/editarPaciente.php?hisCli=<?php echo $dato['hisCli'];?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-pac" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#0D4251" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                              <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                                              <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                                        </svg>
                                    </a>
                                </form>

                                <form action="" method="POST">
                                    <a href="../ModulosCrear/crearPaciente/agregarPaciente.php?hisCli=<?php echo $dato['hisCli'];?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus-pac" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#0D4251" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                              <circle cx="12" cy="12" r="9" />
                                              <line x1="9" y1="12" x2="15" y2="12" />
                                              <line x1="12" y1="9" x2="12" y2="15" />
                                        </svg>
                                    </a>
                                </form>

                        </div>

                    </div>

                        <form class="formulario1" action="" method="POST">

                                    <div class="contenedor-infopaciente">   

                                        <div class="contenedor-imagen flex">
                                            <figure >
                                                    <img  class="fotoMascota" src="data:image/jpg;base64,<?php echo base64_encode($dato['fotPac']); ?>" readonly>
                                            </figure>
                                        </div>

                                        <div class="campo1">
                                            <label>Nombre:</label>
                                            <input class="input-text" type="text" name="visNombre" value="<?php echo $dato['nomPac'];  ?>">
                                        </div>

                                        <div class="campo1">
                                            <label>Especie:</label>
                                            <input class="input-text" type="text" name="visEspecie" value="<?php echo $dato['espPac'];  ?>">
                                        </div>
                                        <div class="campo1">
                                            <label>Raza:</label>
                                            <input class="input-text" type="text" name="visRaza" value="<?php echo $dato['razPac'];  ?>">
                                        </div>
                                        <div class="campo1">
                                            <label>Sexo:</label>
                                            <input class="input-text" type="text" name="sexo" value="<?php echo $dato['sexPac'];  ?>">
                                        </div>
                                        <div class="campo1">
                                            <label>Fecha de Nacimiento:</label>
                                            <input class="input-text" type="date" name="visNacimiento" value="<?php echo $dato['fecNam'];  ?>">
                                        </div>
                                        <div class="campo1">
                                            <label>Color:</label>
                                            <input class="input-text" type="text" name="visColor" value="<?php echo $dato['colPac'];  ?>">
                                        </div>

                                
                                    </div> <!--contenedor-infopaciente--> 
  
                        </form>
                        
            </div>

            <div class="propietario">

                <div class="datos-propietario">

                     <h2>Datos Propietario</h2>

                         <div class="iconos-propietario flex alinear-derecha">

                            <form action="" method="POST">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-pro" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#0D4251" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                          <circle cx="12" cy="12" r="2" />
                                          <path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" />
                                    </svg>
                                </a>
                            </form>

                            <form action="" method="POST">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil-pro" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#0D4251" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                          <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4" />
                                          <line x1="13.5" y1="6.5" x2="17.5" y2="10.5" />
                                    </svg>
                                </a>
                            </form>  

                        </div>
                </div>
        

                            <form class="formulario2">


                                        <div class="contenedor-infopropietario">  

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

    </section>

    <section>

            <div class="motivo-consulta">

                  <div class="titulo-motivo">
                    
                        <h2>Motivo Consulta</h2>

                  </div>
                
                 <form class="formulario3">

                            
                            <div class="contenedor-motivoconsulta"> 

                                    <div class="campo3">
                                        <label>Triage:</label><br>
                                            <select class="selector" name="triage" id="triage">
                                                <option value = "-1" disabled="disabled">Seleccionar triage</option>

                                                <?php
                                                        require_once 'conexion.php';

                                                        $sentencia = "SELECT * FROM triage ORDER BY lisTria";
                                                        $registro = $mysqli->query($sentencia) or die (mysqli_error($mysqli));
                                                        
                                                        while($triage = mysqli_fetch_array($registro)) { ?>
                                                        <option value="<?php echo $triage["idTriage"]; ?>"><?php echo $triage["lisTria"]; ?></option>
                                                        <?php }
                                                ?>      
                                            </select>
                                    </div>

                                    <div class="campo3">
                                         <label>Última consulta:</label><br>
                                         <input class="input-text" type="date" name="ultima" value="<?php echo $dato['ultCon'];  ?>">
                                    </div>

                                    <div class="campo3">
                                         <label>Descripción:</label><br>
                                         <textarea class="descripcion" rows="1" cols="5" name="descripcion" value="<?php echo $dato['descrip'];  ?>"></textarea>
                                    </div>

                                    <div class="campo3">
                                         <label>Antecedentes enfermedad actual:</label><br>
                                         <textarea class="input-text antecedentes" rows="1" cols="5" name="antecedentes" value="<?php echo $dato['antEnf'];  ?>"></textarea>
                                    </div>

                                    <div class="campo3">
                                        <label>Cirugías previas:</label><br>
                                        <textarea class="input-text cirugias" rows="1" cols="5" name="cirugiasPrevias" value="<?php echo $dato['segCli'];  ?>"></textarea>
                                    </div>

                            </div> <!--contenedor-motivoconsulta--> 

                                    <div class="contenedor-btns">
                                        <form action="" method="POST">
                                            <div class="btn1">
                                                <button type="submit">Registrar</button>
                                            </div>
                                        </form>

                                        <form action="" method="POST">
                                            <div class="btn4">
                                                <button type="submit">Cancelar</button>
                                            </div>
                                        </form>
                                    </div>
  
                </form>
            </div>
    </section>

        <section>
            <div class="wrap">
                <ul class="tabs">
                    <li><a href="#tab1">Constantes fisiológicas</a></li>
                    <li><a href="#tab2">Estado físico</a></li>
                    <li><a href="#tab3">Vacunación</a></li>
                    <li><a href="#tab4">Desparasitación</a></li>
                    <li><a href="#tab5">Estado <br> reproductivo</a></li>
                </ul>
            </div>

            <div class="secciones">
                
                <section id="tab1">

                     <div class="campo4">
                            <label>Peso:</label><br>
                            <input class="input-text" type="num" placeholder="Peso en kg">
                    </div>

                    <div class="campo4">
                            <label>Temperatura:</label><br>
                            <input class="input-text" type="num" placeholder="Temperatura en °C">
                    </div>

                    <div class="campo4">
                            <label>Llenado Capilar:</label><br>
                            <input class="input-text" type="num" placeholder="Segundos">
                    </div>

                    <div class="campo4">
                            <label>Frecuencia cardiaca:</label><br>
                            <input class="input-text" type="num" placeholder="Latidos por minuto">
                    </div>

                    <div class="campo4">
                            <label>Frecuencia respiratoria:</label><br>
                            <input class="input-text" type="num" placeholder="Respiraciones/minuto">
                    </div>

                    <div class="campo4">
                            <label>Color mucosas:</label><br>
                            <select class="selector" name="colMucosas" id="colMucosas">
                                                <option value = "-1" disabled="disabled">Seleccionar triage</option>

                                                <?php
                                                        require_once 'conexion.php';

                                                        $sentencia = "SELECT * FROM colormucosas ORDER BY colMuc";
                                                        $registro = $mysqli->query($sentencia) or die (mysqli_error($mysqli));
                                                        
                                                        while($colMucosas = mysqli_fetch_array($registro)) { ?>
                                                        <option value="<?php echo $colMucosas["idColMuc"]; ?>"><?php echo $colMucosas["colMuc"]; ?></option>
                                                        <?php }
                                                ?>      
                            </select>
                    </div>

                    <div class="campo4">
                            <label>Turgencia piel:</label><br>
                            <input class="input-text" type="text" placeholder="">
                    </div><br>

                    <div class="contenedor-btntabs1">
                        <form action="" method="POST">
                            <div class="btn3">
                                    <button type="submit">Guardar</button>
                            </div>
                        </form>
                    </div>
                    
                </section>

                <section id="tab2">

                     <div class="campo4">
                            <label>Estilo de vida:</label><br>
                            <select class="selector" name="espVid" id="espVid">
                                        <option value = "-1" disabled="disabled">Seleccionar estilo</option>

                                        <?php
                                                require_once 'conexion.php';

                                                $sentencia = "SELECT * FROM estilovida ORDER BY estVid";
                                                $registro = $mysqli->query($sentencia) or die (mysqli_error($mysqli));
                                                
                                                while($estilo = mysqli_fetch_array($registro)) { ?>
                                                <option value="<?php echo $estilo["idEVida"]; ?>"><?php echo $estilo["estVid"]; ?></option>
                                                <?php }
                                        ?>      
                            </select>
                    </div>

                    <div class="campo4">
                            <label>Dieta:</label><br>
                            <select class="selector" name="dieta" id="dieta">
                                        <option value = "-1" disabled="disabled">Seleccionar dieta</option>

                                        <?php
                                                require_once 'conexion.php';

                                                $sentencia = "SELECT * FROM dieta ORDER BY lisDie";
                                                $registro = $mysqli->query($sentencia) or die (mysqli_error($mysqli));
                                                
                                                while($dieta = mysqli_fetch_array($registro)) { ?>
                                                <option value="<?php echo $dieta["idDieta"]; ?>"><?php echo $dieta["lisDie"]; ?></option>
                                                <?php }
                                        ?>      
                            </select>
                    </div>

                    <div class="campo4">
                            <label>Hábitad:</label><br>
                            <select class="selector" name="habitad" id="habitad">
                                        <option value = "-1" disabled="disabled">Seleccionar hábitad</option>

                                        <?php
                                                require_once 'conexion.php';

                                                $sentencia = "SELECT * FROM habitad ORDER BY lisHab";
                                                $registro = $mysqli->query($sentencia) or die (mysqli_error($mysqli));
                                                
                                                while($habitad = mysqli_fetch_array($registro)) { ?>
                                                <option value="<?php echo $habitad["idHab"]; ?>"><?php echo $habitad["lisHab"]; ?></option>
                                                <?php }
                                        ?>      
                            </select>
                    </div>

                    <div class="campo4">
                            <label>Actitud:</label><br>
                            <select class="selector" name="actitud" id="actitud">
                                                <option value = "-1" disabled="disabled">Seleccionar actitud</option>

                                                <?php
                                                        require_once 'conexion.php';

                                                        $sentencia = "SELECT * FROM actitud ORDER BY lisAct";
                                                        $registro = $mysqli->query($sentencia) or die (mysqli_error($mysqli));
                                                        
                                                        while($actitud = mysqli_fetch_array($registro)) { ?>
                                                        <option value="<?php echo $actitud["idAct"]; ?>"><?php echo $actitud["lisAct"]; ?></option>
                                                        <?php }
                                                ?>      
                            </select>
                    </div>

                    <div class="campo4">
                            <label>Condición Corporal:</label><br>
                            <select class="selector" name="conCorporal" id="conCorporal">
                                                <option value = "-1" disabled="disabled">Seleccionar condición</option>

                                                <?php
                                                        require_once 'conexion.php';

                                                        $sentencia = "SELECT * FROM concorporal";
                                                        $registro = $mysqli->query($sentencia) or die (mysqli_error($mysqli));
                                                        
                                                        while($conCorporal = mysqli_fetch_array($registro)) { ?>
                                                        <option value="<?php echo $conCorporal["idConCorp"]; ?>"><?php echo $conCorporal["conCorp"]; ?></option>
                                                        <?php }
                                                ?>      
                            </select>
                    </div><br>

                    <div class="contenedor-btntabs2">
                        <div class="btn3">
                            <form action="" method="POST">
                                <button type="submit">Guardar</button>
                            </form>
                        </div>
                    </div>

                </section>

                <section id="tab3">

                    <div class="campo4">
                            <label>Tipo de vacunación:</label><br>
                            <select class="selector" name="tipoVacuna" id="tipoVacuna">
                                                <option value = "-1" disabled="disabled">Seleccionar tipo vacuna</option>

                                                <?php
                                                        require_once 'conexion.php';

                                                        $sentencia = "SELECT * FROM tipovacuna";
                                                        $registro = $mysqli->query($sentencia) or die (mysqli_error($mysqli));
                                                        
                                                        while($tipoVacuna = mysqli_fetch_array($registro)) { ?>
                                                        <option value="<?php echo $tipoVacuna["idtipVac"]; ?>"><?php echo $tipoVacuna["tipVac"]; ?></option>
                                                        <?php }
                                                ?>      
                            </select>
                    </div>

                    <div class="campo4">
                            <label>Última vacuna:</label><br>
                            <input class="input-text" type="text" placeholder="">
                    </div>

                    <div class="campo4">
                            <label>Fecha última vacuna:</label><br>
                            <input class="input-text" type="date" placeholder="">
                    </div>

                    <div class="campo4">
                            <label>Fecha próxima vacuna:</label><br>
                            <input class="input" type="date" placeholder="">
                    </div><br>

                    <div class="contenedor-btntabs3">
                        <div class="btn3">
                            <form action="" method="POST">
                                <button type="submit">Guardar</button>
                            </form>
                        </div>
                    </div>
     
                </section>

                <section id="tab4">

                    <div class="campo4">
                            <label>Último desparasitante interno:</label><br>
                            <input class="input-text" type="text" placeholder="">
                    </div>

                    <div class="campo4">
                            <label>Fecha úlima desparasitación interna:</label><br>
                            <input class="input-text" type="date" placeholder="">
                    </div>

                    <div class="campo4">
                            <label>Último desparasitante externo:</label><br>
                            <input class="input-text" type="text" placeholder="">
                    </div>

                    <div class="campo4">
                            <label>Fecha úlima desparasitación externa:</label><br>
                            <input class="input" type="date" placeholder="">
                    </div><br>

                    <div class="contenedor-btntabs4">
                        <div class="btn3">
                            <form action="" method="POST">
                                <button type="submit">Guardar</button>
                            </form>
                        </div>
                    </div>
                    
                </section>

                <section id="tab5">

                     <div class="campo4">
                            <label>Estado reproductivo:</label><br>
                            <select class="selector" name="eReproductivo" id="eReproductivo">
                                                <option value = "-1" disabled="disabled">Seleccionar estado</option>

                                                <?php
                                                        require_once 'conexion.php';

                                                        $sentencia = "SELECT * FROM eReproductivo ORDER BY  estRep";
                                                        $registro = $mysqli->query($sentencia) or die (mysqli_error($mysqli));
                                                        
                                                        while($eReproductivo = mysqli_fetch_array($registro)) { ?>
                                                        <option value="<?php echo $eReproductivo["idEstRep"]; ?>"><?php echo $eReproductivo["estRep"]; ?></option>
                                                        <?php }
                                                ?>      
                            </select>
                    </div>

                    <div class="campo4">
                            <label>Número de partos:</label><br>
                            <input class="input-text" type="number" placeholder="">
                    </div>

                    <div class="campo4">
                            <label>Fecha último celo:</label><br>
                            <input class="input-text" type="date" placeholder="">
                    </div><br>

                    <div class="contenedor-btntabs5">
                        <div class="btn3">
                            <form action="" method="POST">
                                <button type="submit">Guardar</button>
                            </form>
                        </div>
                    </div>
                    
                </section>

            </div>

        </section>

        <section>

            <div class="seguimiento-clinico">

                
                    <h2>Examen y seguimiento Clínico</h2>

                    <div class="campo5">
                            <label></label><br>
                            <textarea class="input-text seguimiento"></textarea>

                            <div class="contenedor-btn6">
                                <form action="" method="POST">
                                    <div class="btn3">
                                            <button type="submit">Guardar</button>
                                    </div>
                                </form>
                            </div>
                    </div>
            
            </div>

        </section>

        <section>
            
            <div class="contenedor-nuevaconsulta">


                <figure class="btn-irpaciente">

                    <form action="" method="POST">
                        <a href="buscarpaciente.html">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="68" height="68" viewBox="0 0 24 24" stroke-width="2.5" stroke="#0D4251" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                  <line x1="5" y1="12" x2="19" y2="12" />
                                  <line x1="5" y1="12" x2="11" y2="18" />
                                  <line x1="5" y1="12" x2="11" y2="6" />
                            </svg>
                        </a>
                    </form>

                    <figcaption>Ir a <br>Paciente</figcaption>

                </figure>

                <figure class="btn-nuevaconsulta">

                    <form action="" method="POST">
                        <a href="formulariocrearconsulta.html">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" width="92" height="92" viewBox="0 0 24 24" stroke-width="1.5" stroke="#0D4251" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                  <circle cx="12" cy="12" r="9" />
                                  <line x1="9" y1="12" x2="15" y2="12" />
                                  <line x1="12" y1="9" x2="12" y2="15" />
                            </svg>
                        </a>
                    </form>

                    <figcaption>Nueva consulta</figcaption>

                </figure>

                <figure class="btn-ircirugia">

                    <form action="" method="POST">
                        <a href="formulariocrearcirugia.html">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right" width="68" height="68" viewBox="0 0 24 24" stroke-width="2.5" stroke="#0D4251" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                  <line x1="5" y1="12" x2="19" y2="12" />
                                  <line x1="13" y1="18" x2="19" y2="12" />
                                  <line x1="13" y1="6" x2="19" y2="12" />
                            </svg>
                        </a>
                    </form>

                    <figcaption>Ir a <br>Cirugía</figcaption>
                </figure>                   
                    

            </div>

        </section>


<!--------------1. POP UP "INFORMACIÓN ALMACENADA CON ÉXITO"------------------>


            <div class="pop-up">
            
                <div class="pop-wrap">

                        <div class="close flex alinear-derecha">
                            
                            <form action="" method="POST">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" id="close" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#81D7F0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                          <circle cx="12" cy="12" r="9" />
                                          <path d="M10 10l4 4m0 -4l-4 4" />
                                    </svg>
                                </a>
                            </form>

                        </div>

                        <h3>Información almacenada con éxito.</h3>

                        <form action="" method="POST">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check" width="92" height="92" viewBox="0 0 24 24" stroke-width="1" stroke="#81D7F0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                      <circle cx="12" cy="12" r="9" />
                                      <path d="M9 12l2 2l4 -4" />
                                </svg>
                            </a>
                        </form>
                    
                </div>

        </div>



<!----------------------2. POP UP "CANCELAR REGISTRO"------------------------->


            <div class="cancelar-pop-up">
            
                <div class="cancelar-pop-wrap">

                        <h3>¿Desea cancelar el registro actual?</h3>

                        <form action="" method="POST">
                            <a href="#">

                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-alert-octagon" width="112" height="112" viewBox="0 0 24 24" stroke-width="1.5" stroke="#81D7F0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M8.7 3h6.6c.3 0 .5 .1 .7 .3l4.7 4.7c.2 .2 .3 .4 .3 .7v6.6c0 .3 -.1 .5 -.3 .7l-4.7 4.7c-.2 .2 -.4 .3 -.7 .3h-6.6c-.3 0 -.5 -.1 -.7 -.3l-4.7 -4.7c-.2 -.2 -.3 -.4 -.3 -.7v-6.6c0 -.3 .1 -.5 .3 -.7l4.7 -4.7c.2 -.2 .4 -.3 .7 -.3z" />
                                        <line x1="12" y1="8" x2="12" y2="12" />
                                        <line x1="12" y1="16" x2="12.01" y2="16" />
                                </svg>
                            </a>
                        </form>

                        <div class="contenedor-cancelar-btns">

                                    <form action="" method="POST">

                                            <div class="btn5">
                                                    <button id="limpiar" onclick="vaciar()">Sí</button>
                                            </div>

                                    </form>

                                    <form action="" method="POST">
                                        <div class="btn6">
                                            <button type="submit" id="close-cancelar">No</button>
                                        </div>
                                    </form>
                        </div>

                    
                </div>

            </div>

<!--------------3. POP UP "VISUALIZAR PACIENTE" - 3.1. CONTENEDOR MASCOTA----------------------------->

        <div class="vis-pac-pop-up">

            <div class="vis-pac-pop-wrap">

                    <div class="close-vis-pac flex alinear-derecha">
                            
                            <form action="" method="POST">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" id="close-vis-pac" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#0D4251" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                    <input class="input-date" type="date" placeholder="">
                            </div>        
                                
                    </form>    

                    <div class="contenedorhc">
                            
                            <form class="historiaclinica">
                                    <div>
                                        <label>Historia Clínica</label><br>
                                        <input type="" name="">   
                                    </div>
                            </form>

                    </div>

                    <div class="paciente-vis-pac">

                            <div class="datos-paciente-vis-pac">

                                <h2>Datos Paciente</h2>

                            </div>


                            <form class="formulario1">

                                    <div class="contenedor-infopaciente-vis-pac">   

                                                <div class="contenedor-imagen flex">
                                                        <figure>
                                                            <img src="" alt="" >
                                                        </figure>
                                                </div>

                                                <div class="campo1">
                                                    <label>Nombre:</label>
                                                    <input class="input-text" type="text" placeholder="">
                                                </div>

                                                <div class="campo1">
                                                    <label>Especie:</label>
                                                    <input class="input-text" type="text" placeholder="">
                                                </div>
                                                <div class="campo1">
                                                    <label>Raza:</label>
                                                    <input class="input-text" type="text" placeholder="">
                                                </div>
                                                <div class="campo1">
                                                    <label>Sexo:</label>
                                                    <input class="input-text" type="text" placeholder="">
                                                </div>
                                                <div class="campo1">
                                                    <label>Fecha de Nacimiento:</label>
                                                    <input class="input-text" type="date" placeholder="">
                                                </div>
                                                <div class="campo1">
                                                    <label>Color:</label>
                                                    <input class="input-text" type="text" placeholder="">
                                                </div>
                                                <div class="campo1">
                                                    <label>Última atención:</label>
                                                    <input class="input-text" type="date" placeholder="">
                                                </div>

                                        
                                    </div> <!--contenedor-infopaciente--> 
          
                            </form>

                    </div>


<!----------3. POP UP "VISUALIZAR PACIENTE - 3.2. CONTENEDOR PROPIETARIO"---------->


                    <div class="propietario-vis-pac">

                        <div class="datos-propietario-vis-pac">

                             <h2>Datos Propietario</h2>

                        </div>

                                    <form class="formulario2">


                                                <div class="contenedor-infopropietario-vis-pac">  

                                                    <div class="campo2">
                                                        <label>Nombres:</label>
                                                        <input class="input-text" type="text" placeholder="">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Apellidos:</label>
                                                        <input class="input-text" type="text" placeholder="">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Tipo de documento:</label>
                                                        <input class="input-text" type="text" placeholder="">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Número de documento:</label>
                                                        <input class="input-text" type="text" placeholder="">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Dirección:</label>
                                                        <input class="input-text" type="text" placeholder="">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Municipio:</label>
                                                        <input class="input-text" type="text" placeholder="">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Celular:</label>
                                                        <input class="input-text" type="text" placeholder="">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>E-mail:</label>
                                                        <input class="input-text" type="text" placeholder="">
                                                    </div>
                                                    
                                                    
                                                </div> <!--contenedor-infopropietario-->
                                    </form>

                                <div class="contenedor-logo-vis-pac">

                                    <img src="img/logohospital.png" alt=""class="imagen1"/>
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
                                            <button type="submit">Excel</button>
                                        </div>
                                    </form>

                                    <form action="" method="POST">
                                        <div class="btn2">
                                            <button type="submit">PDF</button>
                                        </div>
                                    </form>
                                </div>

                </div>

        </div>


    </div>

<!----------------------4. POP UP "VISUALIZAR PROPIETARIO" 4.1. CONTENEDOR PROPIETARIO---------------------->

    <div class="vis-pro-pop-up">

            <div class="vis-pro-pop-wrap">

                    <div class="close-vis-pro flex alinear-derecha">
                            
                            <form action="" method="POST">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" id="close-vis-pro" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#0D4251" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
                                    <input class="input-date" type="date" placeholder="">
                            </div>        
                                
                    </form>
            

                    <div class="propietario-vis-pro">

                                <div class="datos-propietario-vis-pro">

                                     <h2>Datos Propietario</h2>

                                </div>

                                        <form class="formulario2">


                                                    <div class="contenedor-infopropietario-vis-pro">  

                                                        <div class="campo2">
                                                             <label>Nombres:</label>
                                                            <input class="input-text" type="text" placeholder="">
                                                        </div>

                                                        <div class="campo2">
                                                            <label>Apellidos:</label>
                                                            <input class="input-text" type="text" placeholder="">
                                                        </div>

                                                        <div class="campo2">
                                                            <label>Tipo de documento:</label>
                                                            <input class="input-text" type="text" placeholder="">
                                                        </div>

                                                        <div class="campo2">
                                                            <label>Número de documento:</label>
                                                            <input class="input-text" type="text" placeholder="">
                                                        </div>

                                                        <div class="campo2">
                                                            <label>Dirección:</label>
                                                            <input class="input-text" type="text" placeholder="">
                                                        </div>

                                                        <div class="campo2">
                                                            <label>Municipio:</label>
                                                            <input class="input-text" type="text" placeholder="">
                                                        </div>

                                                        <div class="campo2">
                                                            <label>Celular:</label>
                                                            <input class="input-text" type="text" placeholder="">
                                                        </div>

                                                        <div class="campo2">
                                                            <label>E-mail:</label>
                                                            <input class="input-text" type="text" placeholder="">
                                                        </div>
                                                               
                                                    </div> <!--contenedor-infopropietario-->
                                        </form>

                    </div>



<!-------------------LISTADO PACIENTES-------------------------------------->

                    <div class="listado-pacientes">

                        <div class="pacientes-a-cargo">
                                <h2>Pacientes a Cargo</h2>
                        </div>

                        <div>
                            <table class="tabla">
                                <tr class="fila"><!--fila-->
                                     <th class="historia">Historia Clínica</th><!--columna-->
                                     <th class="nombre">Nombre</th><!--columna-->
                                     <th class="sexo">Sexo</th><!--columna-->
                                     <th class="especie">Especie</th><!--columna-->
                                     <th class="raza">Raza</th><!--columna-->
                                     <th class="ultima">Fecha Ultima Atención</th><!--columna-->
                                     <th class="estado">Estado</th><!--columna-->
                                     <th class="observaciones">Observaciones</th><!--columna-->
                                </tr>

                                <tr class="fila"><!--fila-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                </tr>

                                <tr class="fila"><!--fila-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                </tr>

                                <tr class="fila"><!--fila-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                </tr>

                            </table>
                        </div>

                            <div class="contenedor-logo-vis-pac">

                                    <img src="img/logohospital.png" alt=""class="imagen1"/>
                                    <img src="img/leyenda.png" alt=""class="imagen2"/>
                            </div>


                                <div class="contenedor-info-veterinaria">


                                     <p class="parrafo-info-vet">
                                            Dirección: Transversal 23 b - Bis N° 26 -23 <br>
                                            Manila II Sector - Fusagasugá <br>
                                            Contacto 300 767 2316   -  311 441 2405 <br>
                                            </p>


                                </div>


                                <div class="contenedor-btns-vis-pro">

                                    <form action="" method="POST">
                                        <div class="btn2">
                                            <button type="submit">Excel</button>
                                        </div>
                                    </form>

                                    <form action="" method="POST">
                                        <div class="btn2">
                                            <button type="submit">PDF</button>
                                        </div>
                                    </form>
                                </div>

                    </div>


            </div>
    </div>   


<!--------------5. POP UP "EDITAR PACIENTE" - 5.1. CONTENEDOR MASCOTA----------------------------->

        <div class="vis-pac-pop-up-edit">

            <div class="vis-pac-pop-wrap-edit">

                    <div class="close-vis-pac-edit flex alinear-derecha">
                            
                            <form action="" method="POST">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" id="close-vis-pac-edit" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#0D4251" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                          <circle cx="12" cy="12" r="9" />
                                          <path d="M10 10l4 4m0 -4l-4 4" />
                                    </svg>
                                </a>
                            </form>

                    </div>

                    <form class="fechayhora" action="" method="POST">
                                   
                            <div class="fecha-vis-pac">
                                    <label>Fecha:</label>
                                    <input class="input-date" type="date" placeholder="">
                            </div>        
                                
                    </form>    

                     <div class="contenedorhc">
                    
                    <form class="historiaclinica">
                            <div>
                                <label>Historia Clínica</label><br>
                                <input type="" name="">   
                            </div>
                    </form>

                </div>

                    <div class="paciente-vis-pac">

                            <div class="datos-paciente-vis-pac">

                                <h2>Datos Mascota</h2>

                            </div>


                            <form class="formulario1" action="" method="POST">

                                    <div class="contenedor-infopaciente-vis-pac">   

                                                <div class="contenedor-imagen">
                                                        <figure>
                                                            <img src="" alt="" >
                                                        </figure>
                                                </div>

                                                <div class="campo1">
                                                    <label>Nombre:</label>
                                                    <input class="input-text" id="edNomPac"  type="text" placeholder="" onFocus="vaciar(this)">
                                                </div>
                                                <div class="campo1">
                                                    <label>Especie:</label>
                                                    <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                </div>
                                                <div class="campo1">
                                                    <label>Raza:</label>
                                                    <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                </div>
                                                <div class="campo1">
                                                    <label>Sexo:</label>
                                                    <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                </div>
                                                <div class="campo1">
                                                    <label>Fecha de Nacimiento:</label>
                                                    <input class="input-text" type="date" placeholder="" onFocus="vaciar(this)">
                                                </div>
                                                <div class="campo1">
                                                    <label>Color:</label>
                                                    <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                </div>
                                                <div class="campo1">
                                                    <label>Última atención:</label>
                                                    <input class="input-text" type="date" placeholder="" onFocus="vaciar(this)">
                                                </div>

                                        
                                    </div> <!--contenedor-infopaciente--> 
          
                            </form>

                    </div>

<!----------5. POP UP "EDITAR PACIENTE - 5.2. CONTENEDOR PROPIETARIO"---------->


                    <div class="propietario-vis-pac">

                        <div class="datos-propietario-vis-pac">

                             <h2>Datos Propietario</h2>

                        </div>

                                    <form class="formulario2" action="" method="POST">


                                                <div class="contenedor-infopropietario-vis-pac">  

                                                    <div class="campo2">
                                                        <label>Nombres:</label>
                                                        <input class="input-text" id="edNomPro" type="text" placeholder="" onFocus="vaciar(this)">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Apellidos:</label>
                                                        <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Tipo de documento:</label>
                                                        <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Número de documento:</label>
                                                        <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Dirección:</label>
                                                        <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Municipio:</label>
                                                        <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Celular:</label>
                                                        <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>E-mail:</label>
                                                        <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                    </div>
                                                    
                                                    
                                                </div> <!--contenedor-infopropietario-->
                                    </form>

                                <div class="contenedor-logo-vis-pac">

                                    <img src="img/logohospital.png" alt=""class="imagen1"/>
                                    <img src="img/leyenda.png" alt=""class="imagen2"/>
                                </div>


                                <div class="contenedor-info-veterinaria">


                                     <p class="parrafo-info-vet">
                                            Dirección: Transversal 23 b - Bis N° 26 -23 <br>
                                            Manila II Sector - Fusagasugá <br>
                                            Contacto 300 767 2316   -  311 441 2405 <br>
                                     </p>


                                </div>


                               <div class="contenedor-btns0 flex">
                                            <form action="" method="POST">
                                                <div class="btn1">
                                                    <button type="submit" onclick="vaciar(control)">Registrar</button>
                                                </div>
                                            </form>

                                            <form action="" method="POST">
                                                <div class="btn4">
                                                    <button type="reset">Cancelar</button>
                                                </div>
                                            </form>
                                </div>

                </div>

        </div>

   </div>

<!--------------6. POP UP "NUEVO PACIENTE" - 6.1. CONTENEDOR MASCOTA----------------------------->

        <div class="vis-pac-pop-up-new">

            <div class="vis-pac-pop-wrap-new">

                    <div class="close-vis-pac-new flex alinear-derecha">
                            
                            <form action="" method="POST">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" id="close-vis-pac-new" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#0D4251" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                          <circle cx="12" cy="12" r="9" />
                                          <path d="M10 10l4 4m0 -4l-4 4" />
                                    </svg>
                                </a>
                            </form>

                    </div>

                    <form class="fechayhora" action="" method="POST">
                                   
                            <div class="fecha-vis-pac">
                                    <label>Fecha:</label>
                                    <input class="input-date" type="date" placeholder="">
                            </div>        
                                
                    </form>  

                     <div class="contenedorhc">
                    
                        <form class="historiaclinica">
                                <div>
                                    <label>Historia Clínica</label><br>
                                    <input type="" name="">   
                                </div>
                        </form>

                    </div>  

                 
                    <div class="paciente-vis-pac">

                            <div class="datos-paciente-vis-pac">

                                <h2>Datos Mascota</h2>

                            </div>


                            <form class="formulario1" action="" method="POST">

                                    <div class="contenedor-infopaciente-vis-pac">   

                                                <div class="contenedor-imagen">
                                                        <figure>
                                                            <img src="" alt="" >
                                                        </figure>
                                                </div>

                                                <div class="campo1">
                                                    <label>Nombre:</label>
                                                    <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                </div>
                                                <div class="campo1">
                                                    <label>Especie:</label>
                                                    <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                </div>
                                                <div class="campo1">
                                                    <label>Raza:</label>
                                                    <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                </div>
                                                <div class="campo1">
                                                    <label>Sexo:</label>
                                                    <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                </div>
                                                <div class="campo1">
                                                    <label>Fecha de Nacimiento:</label>
                                                    <input class="input-text" type="date" placeholder="" onFocus="vaciar(this)">
                                                </div>
                                                <div class="campo1">
                                                    <label>Color:</label>
                                                    <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                </div>
                                                <div class="campo1">
                                                    <label>Última atención:</label>
                                                    <input class="input-text" type="date" placeholder="" onFocus="vaciar(this)">
                                                </div>

                                        
                                    </div> <!--contenedor-infopaciente--> 
          
                            </form>

                    </div>

<!----------6. POP UP "EDITAR PACIENTE - 6.2. CONTENEDOR PROPIETARIO"---------->


                    <div class="propietario-vis-pac">

                        <div class="datos-propietario-vis-pac">

                             <h2>Datos Propietario</h2>

                        </div>

                                    <form class="formulario2" action="" method="POST">


                                                <div class="contenedor-infopropietario-vis-pac">  

                                                    <div class="campo2">
                                                        <label>Nombres:</label>
                                                        <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Apellidos:</label>
                                                        <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Tipo de documento:</label>
                                                        <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Número de documento:</label>
                                                        <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Dirección:</label>
                                                        <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Municipio:</label>
                                                        <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>Celular:</label>
                                                        <input class="input-text" type="text" placeholder="">
                                                    </div>

                                                    <div class="campo2">
                                                        <label>E-mail:</label>
                                                        <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                    </div>
                                                    
                                                    
                                                </div> <!--contenedor-infopropietario-->
                                    

                                    <div class="contenedor-logo-vis-pac">

                                        <img src="img/logohospital.png" alt=""class="imagen1"/>
                                        <img src="img/leyenda.png" alt=""class="imagen2"/>
                                    </div>


                                    <div class="contenedor-info-veterinaria">


                                         <p class="parrafo-info-vet">
                                                Dirección: Transversal 23 b - Bis N° 26 -23 <br>
                                                Manila II Sector - Fusagasugá <br>
                                                Contacto 300 767 2316   -  311 441 2405 <br>
                                         </p>


                                    </div>


                                   <div class="contenedor-btns0 flex">
                                                <form action="" method="POST">
                                                    <div class="btn1">
                                                        <button type="submit" onclick="vaciar(control)">Registrar</button>
                                                    </div>
                                                </form>

                                                <form action="" method="POST">
                                                    <div class="btn4">
                                                        <button type="reset">Cancelar</button>
                                                    </div>
                                                </form>
                                    </div>

                            </form>

                </div>

        </div>

   </div>

<!----------------------7. POP UP "EDITAR PROPIETARIO" 7.1. CONTENEDOR PROPIETARIO---------------------->



<div class="vis-pro-pop-up-edit">

            <div class="vis-pro-pop-wrap-edit">

                    <div class="close-vis-pro-edit flex alinear-derecha">
                            
                            <form action="" method="POST">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x" id="close-vis-pro-edit" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#0D4251" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                          <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                          <circle cx="12" cy="12" r="9" />
                                          <path d="M10 10l4 4m0 -4l-4 4" />
                                    </svg>
                                </a>
                            </form>

                    </div>

                    <form class="fechayhora" action="" method="POST">
                                   
                            <div class="fecha-vis-pac">
                                    <label>Fecha:</label>
                                    <input class="input-date" type="date" placeholder="">
                            </div>        
                                
                    </form>
            

                    <div class="propietario-vis-pro">

                                <div class="datos-propietario-vis-pro">

                                     <h2>Datos Propietario</h2>

                                </div>

                                        <form class="formulario2" action="" method="POST">


                                                    <div class="contenedor-infopropietario-vis-pro">  

                                                        <div class="campo2">
                                                             <label>Nombres:</label>
                                                            <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                        </div>

                                                        <div class="campo2">
                                                            <label>Apellidos:</label>
                                                            <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                        </div>

                                                        <div class="campo2">
                                                            <label>Tipo de documento:</label>
                                                            <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                        </div>

                                                        <div class="campo2">
                                                            <label>Número de documento:</label>
                                                            <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                        </div>

                                                        <div class="campo2">
                                                            <label>Dirección:</label>
                                                            <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                        </div>

                                                        <div class="campo2">
                                                            <label>Municipio:</label>
                                                            <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                        </div>

                                                        <div class="campo2">
                                                            <label>Celular:</label>
                                                            <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                        </div>

                                                        <div class="campo2">
                                                            <label>E-mail:</label>
                                                            <input class="input-text" type="text" placeholder="" onFocus="vaciar(this)">
                                                        </div>
                                                               
                                                    </div> <!--contenedor-infopropietario-->
                                        </form>

                    </div>

    

<!-------------------LISTADO PACIENTES----------------------------->


            <div class="listado-pacientes">

                        <div class="pacientes-a-cargo">
                                <h2>Pacientes a Cargo</h2>
                        </div>

                        <div>
                            <table class="tabla">
                                <tr class="fila"><!--fila-->
                                     <th class="historia">Historia Clínica</th><!--columna-->
                                     <th class="nombre">Nombre</th><!--columna-->
                                     <th class="sexo">Sexo</th><!--columna-->
                                     <th class="especie">Especie</th><!--columna-->
                                     <th class="raza">Raza</th><!--columna-->
                                     <th class="ultima">Fecha Ultima Atención</th><!--columna-->
                                     <th class="estado">Estado</th><!--columna-->
                                     <th class="observaciones">Observaciones</th><!--columna-->
                                </tr>

                                <tr class="fila"><!--fila-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                </tr>

                                <tr class="fila"><!--fila-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                </tr>

                                <tr class="fila"><!--fila-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                     <td></td><!--columna-->
                                </tr>

                            </table>
                        </div>

                            <div class="contenedor-logo-vis-pac">

                                    <img src="img/logohospital.png" alt=""class="imagen1"/>
                                    <img src="img/leyenda.png" alt=""class="imagen2"/>
                            </div>


                                <div class="contenedor-info-veterinaria">


                                     <p class="parrafo-info-vet">
                                            Dirección: Transversal 23 b - Bis N° 26 -23 <br>
                                            Manila II Sector - Fusagasugá <br>
                                            Contacto 300 767 2316   -  311 441 2405 <br>
                                            </p>


                                </div>


                               <div class="contenedor-btns0 flex">
                                            <form action="" method="POST">
                                                <div class="btn1">
                                                    <button type="submit" onclick="vaciar(control)">Registrar</button>
                                                </div>
                                            </form>

                                            <form action="" method="POST">
                                                <div class="btn4">
                                                    <button type="reset">Cancelar</button>
                                                </div>
                                            </form>
                                </div>

                    </div>


        </div>    


    </div>


</main>
</body>
</html>