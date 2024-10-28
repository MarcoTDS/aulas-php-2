<?php 

$n = 5;
$r = 3;
echo "<h1>Progressão aritmética de 3 a partir de 5</h1><br>";
echo "{".$n;
for($i=0;$i<9;$i++){
    echo ", ".$n+=$r;
}
echo "}";