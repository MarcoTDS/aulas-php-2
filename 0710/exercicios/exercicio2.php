<?php
    
/*2- Faça um programa em PHP que organize os dados da tabela
abaixo na forma de um array associativo. Depois, percorra esse
array e mostre seus dados em uma tabela utilizando PHP e HTML.*/

$l1 = array("nome" => "Marco","endereco"=>"Rua A", "cidade"=>"Foz do Iguaçu", "uf"=>"PR");
$l2 = array("nome" => "Caroline","endereco"=>"Rua B", "cidade"=>"Foz do Iguaçu", "uf"=>"PR");
$l3 = array("nome" => "Matheus","endereco"=>"Rua C", "cidade"=>"Foz do Iguaçu", "uf"=>"PR");
$l4 = array("nome" => "Karen","endereco"=>"Rua D", "cidade"=>"Foz do Iguaçu", "uf"=>"PR");

$matriz = array($l1,$l2,$l3,$l4);

echo "<table border=1>";

    echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Endereço</th>";
        echo "<th>Cidade</th>";
        echo "<th>UF</th>";
    echo "</tr>";
    foreach($matriz as $tr){
        echo "<tr>";
        foreach($tr as $th){
            echo "<td>".$th."</td>";
        }
        echo "</tr>";
    }

echo "</table>";