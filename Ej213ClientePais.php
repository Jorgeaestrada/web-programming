<!DOCTYPE html>
<html>
	<head>
		<script src = "js/jquery-3.3.1.min.js"></script>
		<script>
		$(document).ready(function(){
			$("selPais").change(function(){
				var codigoPais = ("#selPais").val();
				llamadaAsincrona(codigoPais);
			});
			function llamadaAsincrona(codigoPais) {
				$.get("Ej213Server.php?pais = " + codigoPais, function(data, status) {
					if(status == "success") {
						$("estados").html(data);
					}
					else {
						alert("status = " + status + " data = " + data);
					}		
				});		
			}
		});
		</script>
	</head>
	<body>
		<h1>Formulario</h1>
		<form>
			Usuario<input type = "text" name = "txtUsuario" id = "txtUsuario"/> <br/>
			formulario continua......<br/>
			Pais: 
			<select id = "selPais">
				<option value = "-1">Seleccionar</option>
				<option value = "Mex">Mexico</option>
				<option value = "Usa">Estados Unidos</option>
				<option value = "España">España</option>
				<option value = "Can">Canada</option>
			</select>
			<br/>
			<select id = "estados">
				<!-- llenado con ajax -->
			</select>
			<br/>
			<input type = "submit" value = "Enviar"/>
			<input type = "reset" value = "Cancelar"/>
		</form>
	</body>
</html>
