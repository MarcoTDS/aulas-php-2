<?php

$vetAssoc = array("nome" => "Marco Aurélio",
                  "idade" => 19,
                  "altura" => 1.85
                );

echo "<br><br>*********** ARRAY ASSOCIATIVO *********** <br>";
print_r($vetAssoc);

echo "<br><br>*********** ADD POSIÇÃO *********** <br><br>";
$vetAssoc["peso"] = "80 KG";

print_r($vetAssoc);
    
$vetor = array(4,6,8,7,2);

echo "<br>*********** POR POSIÇÃO *********** <br>";

echo $vetor[1]."<br>";

array_push($vetor, 2000);

echo "<br>*********** USANDO FOREACH *********** <br>";

foreach($vetor as $dado){
    echo $dado."<br>";
}