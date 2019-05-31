<?php
    /*
     * Simula acceso a BD
     */
    if(isset($_GET["pais"])) {
        $pais = $_GET["pais"];
        /*
         * Arreglos asociativos 
         */
        $estados = array("Mex" => array("Nuevo León", "CdMX", "Jalisco", "Campeche", "Yucatan"), 
            "Esp" => array("Casas Grandes", "Barcelona", "Cevilla", "Madrid"),
            "Usa" => array("California", "Florida", "Texas", "Washington"),
            "Can" => array("Quebec", "Vancouver", "Ottawa", "Montreal")
        );
        /* 
         *	Debería de validarse que el pais no existe
         *	por motivos de seguridad
         *
         *	Devuelve el contenido de un select
         */
        foreach ($estados[$pais] as $estados) {
            echo "<option> $estados</option> \n"; //n/ salto de linea
        }
    }
?>
