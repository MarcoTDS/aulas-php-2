<?php 

function fatorial($num){
    $resultado = 1;

    for($i=1;$i<=$num;$i++){
        $resultado *= $i;
    }

    return $resultado;
}


for($i=5;$i<=12;$i++){
    echo "Fatorial de ".$i."<br>";
    echo fatorial($i)."<br>";
}