<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type = "text/css">
		.opaco {
			background-color: dodgerblue;
			color: white;
			width: 300px;
			height: 200px;
		}
		.transparente {
			position: absolute;
			background-color: rgba(255, 99, 71, .5);
			color: white;
			width: 100px;
			height: 80px;
			margin-left: 260px;
			margin-top: -100px;
			z-index: -1;
			

		}
	</style>
</head>
<body>
 <div class = "opaco">
 	Este es un div1 
 </div>
 <div class = "transparente">
 	Este es un div2
 </div>
</body>
</html>
