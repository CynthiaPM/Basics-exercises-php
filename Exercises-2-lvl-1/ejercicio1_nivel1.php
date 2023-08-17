<?php

function nuevafuncion($x) {
 
    if( $x % 2 == 0){
        $resultado = "El numero es par";
    }else{
        $resultado = "El numero es impar";
    }
    return $resultado;
}

 echo nuevafuncion(8);
?>