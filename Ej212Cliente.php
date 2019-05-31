<!DOCTYPE html>
<html>
	<head>
		<title>Mi primer HTML</title>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script>
		$(document).ready(function(){
			$("#btnConsultar").click(function(){
				var nombre = $("#tuNombre").val();
				var url = "Ej212Server.php?nombre = "+nombre;
				$("#del Server").get(url, function(data, status){
					if(status=="") {
						$("del server").html(data)
					}
				});
			});
		});
		</script>
	</head>
	<body>
		Tu nombre es: <input type="text" id="tuNombre" name="tuNombre">
		<button id="btnConsultar">Consultar Hora Server</button>
		<div id="del server"></div>
	</body>
</html>
