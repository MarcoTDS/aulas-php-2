<?php
/*1- Crie 4 arrays indexados em PHP, cada um deles com 5 posições.
Após isso, faça um laço sobre cada um dos arrays mostrando seus
valores em uma lista ordenada. Utilize PHP e HTML para desenhá-
la.*/

$v1 = array("a","b","c","d","e");
$v2 = array(1,2,3,4,5);
$v3 = array("A","B","C","D","E");
$v4 = array(10,20,30,40,50);

echo "<h1>Primeiro Vetor</h1>";
echo "<ol>";
foreach($v1 as $li){
    echo "<li>".$li."</li>";
}
echo "</ol><br>";

echo "<h1>Segundo Vetor</h1>";
echo "<ol>";
foreach($v2 as $li){
    echo "<li>".$li."</li>";
}
echo "</ol><br>";

echo "<h1>Terceiro Vetor</h1>";
echo "<ol>";
foreach($v3 as $li){
    echo "<li>".$li."</li>";
}
echo "</ol><br>";

echo "<h1>Quarto Vetor</h1>";
echo "<ol>";
foreach($v4 as $li){
    echo "<li>".$li."</li>";
}
echo "</ol><br>";
