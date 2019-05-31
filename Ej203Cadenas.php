<!DOCTYPE html>
<html lang = "es-MX">
	<head>
		<title></title>
		<meta charset = "UTF-8"/>
		<script>
		function inicio(){
			var salida = "";
			var str1 = "Hola";
			var str2 = "Mundo";
			var str3 = "";
			var divSalida = document.getElementById("divSalida");
			//Operaciones mas frecuentes de cadenas
			salida += "Concatenacion <br>";
			salida += "str1 = " + str1 + "<br>";
			salida += "str2 = " + str2 + "<br>";
			salida += "str1 + str2 = " + str1 + " " + str2 + "<br>";
            str3 = str1 + " " + str2;
            salida += "str3 = " + str3 + "<br>";
            salida += "str3.indexOf('Mundo') : " + str3.indexOf("Mundo") + "<br>";

            var str4 = str3.substr(5,10);
            salida += "str4 = str3.substr(5,10) <br>";
            salida += "str4 = " + str4 + "<br>";
            str4 = "uno dos tres cuuatro cinco";
            salida += "str4 = " + str4 + "<br>";
            salida += "var arreglo = str4.split(' '); <br>";
            var arreglo = str4.split(' '); 
            /*
			*	Recorrer el mediante una iteracion
			*/
            for(var k = 0; k<arreglo.length;k++){
                salida += "arreglo[" + k + "] = " + arreglo[k] + "<br>";
            }

            salida += "Caracter por Caracter <br>";
            for(var k = 0; k < str1.length; k++){
                salida += "str1.charAt(" + k + ") = " + str1.charAt(k) + "<br>";
            }

            salida += "Mayusculas y minusculas <br>";
            salida += "str1.toLowerCase() = " + str1.toLowerCase() + "<br>";
            salida += "str1.toUpperCase() = " + str1.toUpperCase() + "<br>";
			divSalida.innerHTML = salida;
		}
		/*
		*	Forma moderna de hacer el EventListener
		*/
		window.addEventListener("load", inicio, true);
		</script>
	</head>
	<body>
		/*
		*	Forma antigua mediante
		*/
		<h1>Cadenas y Manejo de Cadenas</h1>
		<div id = "divSalida"></div>
	</body>
</html>
