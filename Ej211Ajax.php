<!DOCTYPE html>
<html>
	<head>
		<script src = "js/jquery-3.3.1.min.js"></script>
		<script>
		$(document).ready(function(){
			$("#btnCargar").click(function(){
				$("#texto").load("Ej211Ajax.txt").toggle(10);
			});
		});
		</script>
		<style type = "text/css">
		  #texto {
		      position: relative;
		      width: 30%;
		      margun: auto;
		      background-color: wheat;
		      color: green;
		  }
		</style>
	</head>
	<body>
		<button id = "btnCargar">Cargar Página</button>
		<div id = "texto"></div>
	</body>
</html>
