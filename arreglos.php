<?php 
 /*Arreglos escalares
 * Los elementos son indizados por un numero entero
 *Arreglos asociativos
 * Los elementos son indizados por una cadena
 */

 //Arreglos escalares:
$dia[0] = "Dom";
$dia[1] = "Lun";
$dia[2] = "Mar";
$dia[3] = "Mie";
$dia[4] = "Jue";
$dia[5] = "Vie";
$dia[6] = "Sab";


$mes = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");

reocorrerArreglo($dia);
echo "<br>"; 
reocorrerArreglo($mes);
echo "<br>";

function reocorrerArreglo($arreglo){
	if (is_array($arreglo)){
	$tam = count($arreglo);
	for ($k=0; $k<$tam; $k++) { 
		echo "arreglo[$k] = $arreglo[$k] <br>";
	  }
    }
  }


 ?>
