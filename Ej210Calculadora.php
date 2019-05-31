<!DOCTYPE html>
<html>
	<head>
		<script src = "js/jquery-3.3.1.min.js"></script>
		<script>
		$(document).ready(function(){
			var display = $("#display");
			var primerDigito = true;
			var acumulador = 0.0;
			var operador = "=";
			
			$("button").click(function(){
				var tecla = $(this).html();
				var texto = display.val();
				/*
				*	Es un numero u operador
				*/
				if("0123456789.".indexOf(tecla) >= 0) {
					/*
					*	Es un digito
					*/
					if(primerDigito) {
						texto = tecla;
						primerDigito = false;
					} else {
						texto += tecla;
					}	
				} else {
					//es un operador
					var valor = Number(display.val());
					calcular(valor);
					operador = tecla;
					primerDigito = true;
					texto = " "+acumulador;
				}	
				display.val(texto);
			});
		function calcular(valor) {
			
			switch (operador) {
			case "=": acumulador = valor;
						break;
			case "/": acumulador /= valor; 
						break;	
			case "+": acumulador += valor;
						break;
			case "-": acumulador -= valor;
						break;	
			case "X": acumulador *= valor;
						break;					
			}
		}
		});
		</script>
		
		<style type = "text/css">
		  #calculadora {
		      position: relative;
		      background-color: silver;
		      width: 320px;
		      margin: auto;
		      		      
		  }
		  button
		  {
		      font-size: 36px;
		      width: 64px;
		      margin-left: 10px; 
		      margin-bottom: 10px;
		  }
		  #display
		  {
		      font-size: 24px;
		      margin: 3px;
		      text-align: right;
		  }
		</style>
	</head>
	<body>
		<div id = "calculadora">
		<div><input type = "text" id = "display" name = "display" value = "0"></div>
		
		<div>
			<button>7</button>
			<button>8</button>
			<button>9</button>
			<button>/</button>
		</div>
		<div>
			<button>4</button>
			<button>5</button>
			<button>6</button>
			<button>X</button>
		</div>
		<div>
			<button>1</button>
			<button>2</button>
			<button>3</button>
			<button>-</button>
		</div>
		<div>
			<button>0</button>
			<button>.</button>
			<button>=</button>
			<button>+</button>
		</div>
		</div>
	</body>
</html>
