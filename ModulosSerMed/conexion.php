<?php

    $mysqli = mysqli_connect('localhost', 'root', 'Rokuro800520649', 'vetpetsoft');        

    if (mysqli_connect_errno()){
            echo "Error en conexion a BD <br>",mysqli_connect_error();
            exit();            
    } 
    
    else {

        echo <<< EOT

                <script src="json/wifi.json"></script>

                <svg xmlns=http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wifi" width="35" height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#99c794" fill="none"     stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <line x1="12" y1="18" x2="12.01" y2="18" />
                    <path d="M9.172 15.172a4 4 0 0 1 5.656 0" />
                    <path d="M6.343 12.343a8 8 0 0 1 11.314 0" />
                    <path d="M3.515 9.515c4.686 -4.687 12.284 -4.687 17 0" />
                </svg>

            EOT;

    }

?>