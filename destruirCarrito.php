<?php
  session_start();  //Crea y/o recupera la sesion existente
  session_destroy();
  header("Location: Ej307Carrito.php");
?>