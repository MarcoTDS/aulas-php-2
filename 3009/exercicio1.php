<?php

$numeros = 1;
echo "While<br>";

while($numeros <= 10){
    echo $numeros . "<br>";
    $numeros++;
}

$numeros = 1;
echo "Do/While<br>";

do{
    echo $numeros . "<br>";
    $numeros++;
}while($numeros <= 10);

$numeros = 1;
echo "For<br>";

for($i=0;$i<10;$i++){
    echo $numeros . "<br>";
    $numeros++;
}
