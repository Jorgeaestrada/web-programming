<?php 
  //Ej301Hola.php
  //phpinfo();
  //Variables
  $entero = 1;
  $flotante = 1.1;
  $cadena = "HOLA";
  $cadena2 ='hola';
  
  echo "entero=$entero <br>";
  echo "flotante=$flotante <br>";
  echo "cadena=$cadena <br>";
  echo $cadena . $cadena2 . "<br>"; //Concatenacion. Unir Cadenas
  
  //Operadores
  
  $a=10;
  $b=8;
  echo "a=$a b=$b <br>";
  echo "a + b " . ($a + $b) . "<br>";
  echo "a - b " . ($a - $b) . "<br>";
  echo "a * b " . ($a * $b) . "<br>";
  echo "a / b " . ($a / $b) . "<br>";
  echo "intdiv(a, b) " . intdiv($a, $b) . "<br>";
  echo "a % b " . ($a % $b) . "<br>";
  
  //Asignacion compuesta
  $a += $b;
  echo "a+= b " . $a . "<br >";
  $a=10;
  $a -= $b;
  echo "a -= b " . $a . "<br >"; 
?>
