<?php

function gradoEstudiante($nota){
    $maximoNota = 10;

    $porcentaje = ($nota / $maximoNota) * 100;

    if ($porcentaje >=60) {
        $grado = "Primera Division";
    }else if ($porcentaje >= 45 && $porcentaje <60){
        $grado = "Segunda División";
    }else if ($porcentaje >=33 && $porcentaje <45){
        $grado = "Tercera División";
    }else {
        $grado = "Reprobado";
    }

    return $grado;
}

echo "El grado correspondiente es: ".gradoEstudiante(3);

?>