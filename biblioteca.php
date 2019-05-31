<?php
   /*
    * biblioteca.php
    * 
    */
function recorrerTabla($tabla){
    $salida='<table border="1">';
    $encabezados = false;
    foreach($tabla as $renglon){
        // 1 Renglón para los encabezados
        if(!$encabezados){
            //si NO se han puesto los encabezados, ponerlos
            $salida .= "<tr>";
            foreach($renglon as $llave=>$valor){
                $salida .= "<th> $llave </th>";
            }
            $salida .= "</tr>";
            $encabezados = true;  //Ya puse los encabezados
        }
        // Los N renglones
        $salida .= "<tr>";
        foreach($renglon as $llave=>$valor){
            $salida .= "<td> $valor </td>";
        }
        $salida .= "</br>";
    }
    $salida .= "</table>";
    return $salida;
}

?>