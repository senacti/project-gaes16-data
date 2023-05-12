<?php
    $num = readline("Ingrese un número cualquiera, el sistema determinará si es par, impar o cero: ");
    if($num == 0){
        echo "El número ingresado es 0";
    }
    elseif($num % 2 == 0){
        echo "El número ingresado es par";
    }
    else{
        echo "El número ingresado es impar";
    }
?>