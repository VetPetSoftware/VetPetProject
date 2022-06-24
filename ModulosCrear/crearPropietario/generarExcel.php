<?php
    $mysqli = mysqli_connect("localhost", "root", "Rokuro800520649", "vetpetsoft");
    $pacientes = ("SELECT * FROM pacientes");
    header("Content-Type: aplication/vnd.ms-excel; charset = utf8_spanish_ci"); 
    header("Content-Disposition: attachment; filename= reporte_pacientes.xls");
?>


<meta charset="utf-8">
<table class="tabla" id="tblData">

            <tr class="primaFila"><!--fila-->
                    <th class="historia">Historia Clínica</th><!--columna-->
                    <th class="nombres">Nombres</th><!--columna-->
                    <th class="apellidos">Apellidos</th><!--columna-->
                    <th class="tDocumento">Tipo documento</th><!--columna-->
                    <th class="nDocumento">Número documento</th><!--columna-->
                    <th class="direccion">Dirección</th><!--columna-->
                    <th class="municipio">Municipio</th><!--columna-->
                    <th class="celular">Celular</th><!--columna-->
                    <th class="email">E-mail</th><!--columna-->
            </tr>

            <?php
                
             
                    $mysqli = mysqli_connect("localhost", "root", "Rokuro800520649", "vetpetsoft");
                    $pacientes = ("SELECT * FROM propietarios");
                    $registros = mysqli_query($mysqli, $pacientes );
                    while($dato=mysqli_fetch_assoc($registros))
                     {?>

                    <tr class="fila"><!--fila-->
                              <td name="tdHistoria"><?php echo $dato['hisCli']; ?></td><!--columna-->
                              <td name="tdNombres"><?php echo $dato['nomPro']; ?></td><!--columna-->
                              <td name="tdApellidos"><?php echo $dato['apePro']; ?></td><!--columna-->
                              <td name="tdTipoDoc"><?php echo $dato['tipDoc']; ?></td><!--columna-->
                              <td name="tdNumDoc"><?php echo $dato['docPro']; ?></td><!--columna-->
                              <td name="tdDireccion"><?php echo $dato['dirPro']; ?></td><!--columna-->
                              <td name="tdMunicipio"><?php echo $dato['munPro']; ?></td><!--columna-->
                              <td name="tdCelular"><?php echo $dato['celPro']; ?></td><!--columna-->
                              <td name="tdEmail"><?php echo $dato['emaPro']; ?></td><!--columna-->
                    <?php
                } /*mysqli_free_result($result)*;*/
            ?>
            
        </table>