<?php
	//servidorGET.php
	if(isset($_GET["numero"])){
		$numero = $_GET["numero"];
		echo "<h1> tabla del $numero </h1>";
		$tabla = '<table border = "1">';
		for ($k = 1; $k <= 10; $k++) { 
			$r = $numero * $k;
			$tabla .= "<tr><td> $numero X $k = </td><td> $r </td></tr>";
		}
		$tabla .= "</table>";

		echo $tabla;	// Muestra la tabla
	}
?>
