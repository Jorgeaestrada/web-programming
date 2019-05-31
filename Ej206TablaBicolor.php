<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<script src = "js/jquery-3.3.1.min.js"></script>
		<script type = "text/javascript">
		$(document).ready(function(){ 
			/*
			*	Define fila de celdas de tabla
			*/
			$("tr:odd").addClass("claro");
			$("tr:even").addClass("oscuro");

			$("tr").mouseover(function(){
				$(this).toggleClass("seleccionado"); 
			});
			
			$("tr").mouseout(function(){
				$(this).toggleClass("seleccionado");
			});

			$("tr").click(function(){
				var codigo = "";
				var producto = "";
				var precio = "";
				var hermano;
				hermano = $(this).children("td");
				codigo = hermano.html();
				hermano = hermano.next();
				producto = hermano.html();
				hermano = hermano.next();
				precio = hermano.html();
				alert("codigo = "+codigo+ " producto = "+producto+" precio = "+precio);
			});
		});
		</script>
		<style type = "text/css">
		  .oscuro{
		      background-color: forestgreen; 
		      color: white;
		  }
		  .claro{
		      background-color: silver;
		  }
		  .seleccionado{
		      background-color: aqua;
		      color: black;
		  }
		</style>
	</head>
	<body>
		<h1>Tabla Bicolor</h1>
		<table>
			<tr><th>Codigo</th> <th>Descripcion</th> <th>Precio</th> </tr>
			
			<tr><td>123</td><td>Coca Cola 600ml</td><td>12.50</td></tr>
			<tr><td>456</td><td>Papas Sabritas 60gr</td><td>14.50</td></tr>
			<tr><td>789</td><td>Jamon de Pavo 1kg</td><td>20.60</td></tr>
			<tr><td>120</td><td>Nachos 30gr</td><td>30.40</td></tr>
			
			<tr><td>123</td> <td>Coca Cola 600ml</td> <td>12.50</td> </tr>
			<tr><td>456</td> <td>Papas Sabritas 60gr</td> <td>14.50</td> </tr>
			<tr><td>789</td> <td>Jamon de Pavo 1kg</td> <td>20.60</td> </tr>
			<tr><td>120</td> <td>Nachos 30gr</td> <td>30.40</td> </tr>
			
			<tr><td>123</td> <td>Coca Cola 600ml</td> <td>12.50</td> </tr>
			<tr><td>456</td> <td>Papas Sabritas 60gr</td> <td>14.50</td> </tr>
			<tr><td>789</td> <td>Jamon de Pavo 1kg</td> <td>20.60</td> </tr>
			<tr><td>120</td> <td>Nachos 30gr</td> <td>30.40</td> </tr>
		</table>
	</body>
</html>
