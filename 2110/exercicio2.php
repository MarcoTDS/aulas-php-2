<?php

function area($r) {
    return 3.14 * pow($r, 2);
}
function circunferencia($r){
    return 2 * 3.14 * $r;
}

$raios = [1,2,3,4];

foreach ($raios as $r) {
    echo "A área de um circulo de raio ".$r." é igual a = ".area($r)."<br>";
    echo "A circunferência de um circulo de raio ".$r." é igual a = ".circunferencia($r)."<br>";
}
