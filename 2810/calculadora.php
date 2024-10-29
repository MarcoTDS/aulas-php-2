<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="calculadora.php" method="post">
        <h2>1° número</h2>
        <input type="text" name="n1" placeholder="Digite um número">
        <h2>2° número</h2>
        <input type="text" name="n2" placeholder="Digite um número">
        <br>
        <h2>Operação</h2>
        <input type="text" name="opt" placeholder="Operação (+ - x /)">
        <button type="submit">Calcular</button>
    </form>
    <?php
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $opt = $_POST['opt'];

        $resultado = 0;

        if(!empty($_POST['n1']) && !empty($_POST['n2']) && !empty($_POST['opt'])){
            if(is_numeric($_POST['n1']) && is_numeric($_POST['n2'])){
                switch($opt){
                    case '+':
                        $resultado = $n1 + $n2;
                        break;
                    case '-':
                        $resultado = $n1 - $n2;
                        break;
                    case 'x':
                        $resultado = $n1 * $n2;
                        break;
                    case '/':
                        $resultado = $n1 / $n2;
                        break;
                }
                echo "<h1>".$resultado."</h1>";
            }
            else{
                echo "<h1>Digite valores válidos</h1>";
            }
        }
        else{
            echo "<h1>Preencha todos os campos da calculadora</h1>";
        }
    ?>
</body>
</html>