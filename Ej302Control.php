<?php
    for($k = 1; $k <= 6;  $k++){
        echo "<h$k> El PHP Es Divertido </h$k>";
    }

    echo "el MCD de 789 y 363 es: ". mcd(789,363);
    
    function mcd($a, $b){
        //Máximo común divisor
        while($a =! $b){
            if($a > $b) {
                $a = $a - $b;
            }
            else 
                if ($b > $a)
                    $b = $b - $a;
        }
        return $a; // $a ó $b
    }
?>
