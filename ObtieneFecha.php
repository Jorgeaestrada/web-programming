<!DOCTYPE html>
<html lang = "es-MX">
	<head>
		<title>
		</title>
		<meta charset = "UTF-8"/>
		<script type = "text/javascript">
			/*	
			*	El uso de alert está deprecado, 
			*	solo para motivos de depuracion
			*/
			function hoy(){
				/*
				*	La fecha de hoy es:
				*/
			var texto= "La fecha es: " +Date();
			var divFecha = document.getElementById("fecha");
			divFecha.innerHTML = texto;
			}
		</script>
	</head>
	<body>
		<h1>Ejemplo de uso de Javascript</h1>
		<button onclick = "hoy()"> presioname</button>
		<div id = "fecha"></div>
	</body>
</html>
