<?php
  session_start();  //Crea y/o recupera la sesion existente
  if(   isset($_SESSION["carrito"])    ){
      //Si existe el carrito, lo recuperamos
      $carrito = $_SESSION["carrito"];      
  }else{
      //si no existe, lo creamos
      $carrito = array(); //Arreglo vacío
      $_SESSION["carrito"]=$carrito;
  }
  if( isset($_GET["codigo"])       ){
      //Si existe la variable, lo buscamos y lo agregamos al carrito
      $codigo = $_GET["codigo"];
      /*
       * Lo buscamos en la base de datos (si tuvieramos
       * $sql = "SELECT * FROM productos WHERE codigo='$codigo'";
       */
       $producto = buscarProducto($codigo);
       if($producto != NULL){
           //Agregar producto al carrito
           $carrito[] = $producto;
           $_SESSION["carrito"] = $carrito;
       }
  }
  //regresamos a la página
  header("Location: Ej307Carrito.php");
  
  function buscarProducto($codigo){
      // Datos (que deberían venir de una base datos, que no tenemos)
      $lista = array(
          array("codigo"=>123, "desc"=>"Coca Cola",          "precio"=>11.50),
          array("codigo"=>456, "desc"=>"Sabritas",           "precio"=>15.50),
          array("codigo"=>789, "desc"=>"Dulcigomas",         "precio"=>18.00),
          array("codigo"=>101, "desc"=>"Gansito",            "precio"=>15.00),
          array("codigo"=>102, "desc"=>"Galletas Emperador", "precio"=>11.00)
      );
      
      // Busqueda lineal
      foreach ($lista as $producto){
          //echo $producto["codigo"] . "<br >";
          if($producto["codigo"]==$codigo){
              //agregar al carrito
              return $producto;
              /*
              $carrito[] = $producto;
              //Guardar el carrito
              $_SESSION["carrito"]=$carrito;
              */
              break; //No necesito seguir buscando
          }
      }
      //echo "ERROR: El producto $codigo no existe en la Base de Datos ";
      return NULL;
  }
?>