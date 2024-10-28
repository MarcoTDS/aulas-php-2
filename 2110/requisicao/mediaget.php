<?php
    
//dar uma mensagem com o nome e sobrenome da pessoa 

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];

echo "media de ".$num1." + ".$num2." + ".$num3." = ".($num1+$num2+$num3)/3 ."<br>";