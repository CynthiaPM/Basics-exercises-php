<?php 

function isBitten() {
    
    $resultado = rand(0,1);

    if($resultado== 1){
        return true;
    }else {
        return false;
    }
}

$mordida = isBitten();

if ($mordida){
    echo "Charlie te morderá el dedo";
} else {
    echo "Charlie no te morderá el dedo, esta vez....";
}

?>