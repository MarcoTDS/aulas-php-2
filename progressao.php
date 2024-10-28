<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progressão Aritmética</title>
</head>
<body>
    <h1>Informe os dados para ser feita a Progressão Aritmética</h1>
    <form action="progressao.php" method="get">
        <h2>Início</h2>
        <input type="text" name="inicio" placeholder="Informe o início da progressão">
        <h2>Razão</h2>
        <input type="text" name="razao" placeholder="Informe a razão da progressão">
        <h2>Quantidade de números</h2>
        <input type="text" name="qnt" placeholder="Informe a quantidade de números da progressão">
        <button type="submit">Gerar</button>
    </form>

    <?php
        if (isset($_GET['inicio']) && isset($_GET['razao']) && isset($_GET['qnt'])) {
            if (is_numeric($_GET['inicio']) && is_numeric($_GET['razao']) && is_numeric($_GET['qnt'])) {
                $ini = (int)$_GET['inicio'];
                $razao = (int)$_GET['razao'];
                $qnt = (int)$_GET['qnt'];

                echo "<h2>Progressão Aritmética:</h2>";
                for ($i = 0; $i < $qnt; $i++) {
                    echo ($ini + $i * $razao) . ", ";
                }
            } 
            elseif(is_numeric($_GET['inicio']) && is_numeric($_GET['razao'])){
                echo "<h2>Por favor, insira a quantidade.</h2>";
            }
            elseif(is_numeric($_GET['inicio']) && is_numeric($_GET['qnt'])){
                echo "<h2>Por favor, insira a razão.</h2>";
            }
            elseif(is_numeric($_GET['qnt']) && is_numeric($_GET['razao'])){
                echo "<h2>Por favor, insira o início.</h2>";
            }
            elseif(is_numeric($_GET['razao'])){
                echo "<h2>Por favor, insira a quantidade e início.</h2>";
            }
            elseif(is_numeric($_GET['qnt'])){
                echo "<h2>Por favor, insira a razão e início.</h2>";
            }
            else{
                echo "<h2>Por favor, insira a razão e a quantidade.</h2>";
            }
        } else {
            echo "<h2>Informe todos os dados para gerar a progressão.</h2>";
        }
    ?>
</body>
</html>
