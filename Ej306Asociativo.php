<?php
	/*
	 * Arreglos asociativos: los elementos están "indizados" por una
	 * cadena de caracteres llamada "llave" o "key"
	 */
	$estudiante["matricula"] = "E15080741";
	$estudiante["nombre"] = "Daniel Bunn";
	$estudiante["semestre"] = 7;
	$estudiante["betahanylilyaplril"] = 69;
	
	echo recorrerAsociativo($estudiante);
	/*
	 * 2 dimensiones, o sea, una tabla. Arreglo de arreglos
	 * lista de productos
	 */
	 $lista = array(
		array("codigo" => 123, "desc" => "coca cola", "precio" => 11.50),
		array("codigo" => 456, "desc" => "pepsi", "precio" => 7.50),
		array("codigo" => 789, "desc" => "peñainfiel", "precio" => 20),
		);
		
	echo "<br />";
	echo recorrerTabla($lista);
	
	function recorrerTabla($tabla){
		$salida = '<table border = "1">';
		$encabezados = false;
		foreach($tabla as $renglon){
			/*
			 * 1 renglon para los encabezados
			 */ 
			if (!$encabezados) {
				/*
				 * Si no hay encabezados, ponerlos
				 */ 	 
				$salida .= "<tr>";
				foreach($renglon as $llave => $valor){
					$salida .= "<th> $llave </th>";
				}
				$salida .= "<tr >";
				$encabezados = true;
			}
			/*
			 * Los N renglones
			 */
			$salida .= "</tr>";
			foreach($renglon as $llave => $valor){
				$salida .= "<td> $valor </td>";
			}
			$salida .= "</br>";
		}
		$salida .= "</table>";
		return $salida;
	}
	/*
	 * como recorrer arreglo asociativo
	 */
	 function recorrerAsociativo($arreglo){
		 $salida = "";
		 if(is_array($arreglo)){
			 foreach($arreglo as $llave => $valor){
				 $salida .= "$llave = $valor <br/>";
				 }
			 }
			 return $salida;
		 }
?>	
