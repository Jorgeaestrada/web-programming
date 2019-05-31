<?php

require_once 'biblioteca.php';

session_start();  //Crea y/o recupera la sesion existente
if(   isset($_SESSION["carrito"])    ){
    //Si existe el carrito, lo recuperamos
    $carrito = $_SESSION["carrito"];
    
    echo recorrerTabla($carrito);
    
}else{
    //si no existe, lo creamos
    $carrito = array(); //Arreglo vacío
    $_SESSION["carrito"]=$carrito;
}

?>

<a href="Ej307Carrito.php"> Regresar </a>