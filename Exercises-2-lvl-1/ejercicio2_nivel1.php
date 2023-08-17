<?php 

function escondrijo($X=10){
    
       
    for ($i=2; $i <= $X ; $i+=2) { 
        echo $i ."</br>";
    }
}

echo escondrijo();

?>