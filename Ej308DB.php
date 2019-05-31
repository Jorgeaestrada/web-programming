<?php
	require_once 'biblioteca.php';
	
	//paso 1 Conectarse a la base de datos
	$servidor = 'localhost';
	$usuario = 'escolar';
	$passwd = 'secreto';
	$db = "escolar";

	$conexion = mysqli_connect($servidor, $usuario, $passwd, $db);
	
	if($conexion != null) {
		echo 'paso 1) ok <br>';
	} else {
		echo 'Error :( </3'.mysqli_error($conexion);
	}
	
	/*
	 * paso 2) seleccionar la base de datos
	 */ 
	 
	 mysqli_select_db($conexion, $db) or die ("Error : ".mysqli_error_list($conexion));
	 echo "paso 2) ok <br>";
	 
	 /*
	 * paso 3) seleccionar la base de datos
	 */ 
	 $sql = "SELECT * FROM estudiantes";
	 
	 /*
	 * paso 4) Hacer la consulta
	 */ 
	 $resultado = mysqli_query($conexion, $sql, MYSQLI_ASSOC);
	 /*
	 * paso 5) Explorar la consulta
	 */ 
	 $lista = array();
	 while($renglon = mysqli_fetch_assoc($resultado)){
		 $lista[] = $renglon;
	 }
	 /*
	 * paso 6) Mostrar la consulta
	 */ 
	 echo recorrerTabla($lista);
	 /*
	 * paso 7) cerrar la conexion
	 */ 
	 mysqli_close($conexion);
?>
