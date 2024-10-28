<?php
$vet1 = array("Orquídea", "Margarida", "Petúnia");
$vet2 = array("Laranja", "Maçã", "Limão");
$vet3 = array("Foz do Iguaçu", "Cascavel", "Toledo");
$vet4 = array("Itaipu", "Cataratas", "Parque das Aves");

$matriz = array($vet1, $vet2, $vet3, $vet4);

echo "<table border=1>";

echo "<tr>";
    echo "<th>Flores</th>";
    echo "<th>Frutas</th>"; 
    echo "<th>Cidades</th>";
    echo "<th>Pontos Turísticos</th>";
echo "</tr>";

for($i = 0; $i < count($vet1); $i++) {
    echo "<tr>";
    echo "<td>" . $matriz[0][$i] . "</td>"; // Flores
    echo "<td>" . $matriz[1][$i] . "</td>"; // Frutas
    echo "<td>" . $matriz[2][$i] . "</td>"; // Cidades
    echo "<td>" . $matriz[3][$i] . "</td>"; // Pontos turísticos
    echo "</tr>";
}

echo "</table>";
