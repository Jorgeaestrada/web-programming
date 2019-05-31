<?php
    /*
     * Agrega la fecha del servidor
    */
    $dato = "";
    if(isset($_GET["dato"])) {
    /*
     *	Si hay informacion entonces la lee
     */  
        $dato = $_GET["dato"];
    }
    echo "$dato ".date('d/m/y h:m:s');
?>
