<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <meta http-equiv = "X-UA-Compatible" content = "ie = edge">
    <title>Formulario</title>
</head>
<body>
    <h1>Registro de formulario</h1>
    <form action = "Ej06ProcesarForm.php" method = "POST">
        Nombre: <input type = "text" name = "txtname" id = "txtname" required = "required"> <br>
        Login: <input type = "text" name = "txtlog" id = "txtlog"> <br>
        Password: <input type = "password" name = "txtpass" id = "txtpass"> <br>
        Sexo: <input type = "radio" name = "radiosexo" value = "M" checked = "checked"> Masculino
              <input type = "radio" name = "radiosexo" value = "F" checked = "checked"> Femenino <br>
        Pais: <select name = "Pais">
            <option value = "-1">Seleccionar</option>
            <option value = "Mexico">México</option>
            <option value = "USA">Estados Unidos</option>
            <option value = "Alemania">Alemania</option>
            <option value = "Italia">Italia</option>
            <option value = "Inglaterra">Inglaterra</option>
            </select> <br>

        Deportes: <input type = "checkbox" name = "chkCaminar" value = "caminar"> Caminar    
                  <input type = "checkbox" name = "chkCiclismo" value = "ciclismo"> Ciclismo
                  <input type = "checkbox" name = "chkNadar" value = "nadar"> Natación
                  <br>
        Habilidades: <br><textarea name = "areaSkills" cols = "50" rows = "10"></textarea><br>

        <input type = "hidden" name = "clave" value = "secreto" id = "clave">
        <input type = "submit" value = "Enviar">
        <input type = "reset" value = "Cancelar">
    </form>
</body>
</html>
