<!DOCTYPE html>
<html lang = "es-MX">
	<head>
		<title></title>
		<meta charset = "UTF-8"/>
		<script>
			var arreglo = []; 
			
        	function agregar(){
            	var divLista = document.getElementById("divLista");
            	var divListaOrdenada = document.getElementById("divListaOrdenada");
            	var txtInvitado = document.getElementById("txtInvitado");
            	var invitado = txtInvitado.value; 
            	/*
            	*	valor del campo de texto(invitado) se agrega a la variable invitado
            	*/
            	arreglo.push(invitado);
            	/*
            	*	ponerlo en le div
            	*/
            	var salida = ""; 
            	/*
            	*	Recorre arreglo de los invitados
            	*/
            	for(var i = 0; i < arreglo.length; i++){ 
                	salida += arreglo[i] + "<br/>"; 
            	}
            	/*
            	*	Agregar al div dinamicamente
            	*/
            	divLista.innerHTML = salida; 
            	txtInvitado.value = "";

            	result=arreglo.sort();
            	divListaOrdenada.innerHTML = result;
        	}
		</script>
		
	</head>
	<body>
		<h1> Invitados a mi fiesta </h1>
		Invitado <input type = "text" name = "txtInvitado" id = "txtInvitado"/>
		<button onclick = " agregar()">Agregar Invitado</button>
		<br/>
		<h2>Invitados</h2>
		<div id = "divLista"></div>
			<br/>
		<h2>Invitados Ordenados</h2>
		<div id = "divListaOrdenada"></div>
	</body>
</html>
