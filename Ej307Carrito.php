<?php
   /*
    * Suponer que $lista se llenó de una base de datos
    * (SELECT * FROM productos)
    */

   //Incluir nuestra "biblioteca.php"
   require_once 'biblioteca.php';
   session_start();
   
$lista = array(
    array("codigo"=>123, "desc"=>"Coca Cola",          "precio"=>11.50,"sel"=>'<a href="agregarCarrito.php?codigo=123">seleccionar</a>'),
    array("codigo"=>456, "desc"=>"Sabritas",           "precio"=>15.50,"sel"=>'<a href="agregarCarrito.php?codigo=456">seleccionar</a>'),
    array("codigo"=>789, "desc"=>"Dulcigomas",         "precio"=>18.00,"sel"=>'<a href="agregarCarrito.php?codigo=789">seleccionar</a>'),
    array("codigo"=>101, "desc"=>"Gansito",            "precio"=>15.00,"sel"=>'<a href="agregarCarrito.php?codigo=101">seleccionar</a>'),
    array("codigo"=>102, "desc"=>"Galletas Emperador", "precio"=>11.00,"sel"=>'<a href="agregarCarrito.php?codigo=102">seleccionar</a>')
);
   echo recorrerTabla($lista);
?>

<a href="verCarrito.php"> Ver Carrito de Compra</a>
<a href="destruirCarrito.php"> Terminar Sesión </a>