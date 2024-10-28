<?php

$c1 = array("nome" => "Foz do Iguaçu", "habitantes" => "250.000", "area" => "500Km", "altitude" => "145m", "estado" => "Paraná");
$c2 = array("nome" => "Foz do Iguaçu", "habitantes" => "250.000", "area" => "500Km", "altitude" => "145m", "estado" => "Paraná");
$c3 = array("nome" => "Foz do Iguaçu", "habitantes" => "250.000", "area" => "500Km", "altitude" => "145m", "estado" => "Paraná");
$c4 = array("nome" => "Foz do Iguaçu", "habitantes" => "250.000", "area" => "500Km", "altitude" => "145m", "estado" => "Paraná");
$c5 = array("nome" => "Foz do Iguaçu", "habitantes" => "250.000", "area" => "500Km", "altitude" => "145m", "estado" => "Paraná");


function desenhaLinha($nome, $habitantes, $area, $altitude, $estado){

    echo "<tr>";
        echo "<td>".$nome."</td>";
        echo "<td>".$habitantes."</td>";
        echo "<td>".$area."</th>";
        echo "<td>".$altitude."</td>";
        echo "<td>".$estado."</td>";
    echo "</tr>";

}
    
echo "<table border=1>";
    echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Habitantes</th>";
        echo "<th>Área</th>";
        echo "<th>Altitude</th>";
        echo "<th>Estado</th>";
    echo "</tr>";

    desenhaLinha($c1["nome"],$c1["habitantes"],$c1["area"],$c1["altitude"],$c1["estado"]);

echo "</table>";