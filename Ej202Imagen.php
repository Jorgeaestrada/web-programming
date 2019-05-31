<!DOCTYPE html>
<html lang = "es-MX">
	<head>
		<title>
		</title>
		<meta charset="UTF-8"/>
		<script type="text/javascript">
			function cerrar() {
				var imgOjo = document.getElementById("ojo");
				imgOjo.src = "img/ojoCerrado.jpg";
			}
			function abrir() {
				var imgOjo = document.getElementById("ojo");
				imgOjo.src = "img/ojoAbierto.jpg";
			}
		</script>
	</head>
	<body>
		<img id = "ojo" src = "img/ojoAbierto.jpg"/> <br/>
		<button onclick = "cerrar()">Cerrar Ojo</button>
		<button onclick = "abrir()">Abrir Ojo</button>
	</body>
</html>
