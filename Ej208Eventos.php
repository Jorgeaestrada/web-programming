<!DOCTYPE html>
<html>
	<head>
		<script src = "js/jquery-3.3.1.min.js"></script>
		<script>
		$(document).ready(function(){
			$("#ojo").click(function() {
				$(this).attr("src", "img/ojoAbierto.jpg");
				$("#mensaje").html("me haces Chop MEN!!")
			});
			$("#ojo").click(function() {
				$(this).attr("src", "img/ojoCerrado.jpg");
				$("#mensaje").html("me haces Chop MEN!!")
			});
		});
		</script>
	</head>
	<body>
		<img id = "ojo" src = "img/ojoAbierto.jpg"/>
		<br/>
		<div id = "mensaje"></div>
	</body>
</html>
