<?php
    
/*1. Elabore um programa em PHP que declare um array com 10 números a sua escolha. Após isso,
forneça como saída a média aritmética dos números desse array.*/

$vet = array(22,66,11,88,66,99,55,77,33,44);
$soma = 0;

foreach($vet as $i){
    $soma+=$i;
    echo $soma;
    echo "  [".$i."] "; 
    echo "<br>";
}

$media = $soma / (count($vet));

echo "Média aritmética dos números do vetor é : ".$media;