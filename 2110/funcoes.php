<?php
    
function ola(){
    echo "Ola mundo";
}

function soma($n1,$n2,$n3 = 1){
    $soma = $n1 + $n2 + $n3;

    return $soma;
}

ola();

$n3 = 10;

echo "<br>".soma(2,2);