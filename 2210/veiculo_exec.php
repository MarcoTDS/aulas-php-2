<?php
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $combustivel = $_POST['combustivel'];

    echo "<h1> Veículo Cadastrado </h1>";
    echo "<h2> Marca : ".$marca."</h2>";
    echo "<h2> Modelo : ".$modelo."</h2>";
    switch($combustivel){
        case "A": 
            echo "<h2> Combustível : Álcool</h2>";
            break;
        case "G":
            echo "<h2> Combustível : Gasolina</h2>";
            break;
        case "F":
            echo "<h2> Combustível : Flex</h2>";
            break;
    }
?>