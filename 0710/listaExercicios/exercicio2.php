<?php
    
/*2. Faça um programa em PHP que declare dois arrays:
- O primeiro deve possuir 5 elementos representando palavras;
- O segundo deve ser vazio;
Após isso, percorra o primeiro array e adicione cada um dos seus elementos no array que foi
declarado vazio. Por fim, percorra o segundo array e imprima os seus elementos separados por
virgula. */

$vet1 = array("AAA","BBB","CCC","DDD","EEE");
$vet2 = array(); 

echo "******* Antes *******<br>";

print_r($vet1);
echo "<br>";
print_r($vet2);
echo "<br>";

foreach($vet1 as $el){
    array_push($vet2, $el);
}

echo "******* Depois *******<br>";
print_r($vet1);
echo "<br>";
print_r($vet2);
echo "<br>";
