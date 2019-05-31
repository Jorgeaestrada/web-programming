<!DOCTYPE html>
<html lang = "es-MX">
	<head>
		<title>
		</title>
		<meta charset = "UTF-8"/>
		<script>
			var invitados = [];
			function agregar() {
				var txtInvitado = document.getElementById("txtInvitado");
				invitados.push(txtInvitado.value);
				var divLista = document.getElementById("lista");
				var salida = " ";
				for(var k = 0; k < invitados.length; k++) {
					salida += invitados[k] + "<br >";
				}
				divLista.innerHTML = salida;
				txtInvitado.value = " ";	
			}
		</script>
	</head>
	
	<body>
		<h1>Invitados a mi fiesta</h1>
		Invitado <input type = "text" name = "txtInvitado" id = "txtInvitado">
		<button onclick = "agregar()">Agregar</button>
		<br><br>
		<h2>Invitados:</h2>
		<div id = "lista"></div>
	</body>
</html>
