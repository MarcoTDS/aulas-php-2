<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muda Cor</title>

    <?php
        if(isset($_GET['cor'])){
            echo "<style> body{background-color: ".$_GET['cor'].";}";
        }
    ?>

</head>
<body>
    <form action="cor.php" method="get">
        <select name="cor">
            <option value="">--Selecione a cor---</option>
            <option value="black">Preto</option>
            <option value="gray">Cinza</option>
            <option value="green">Verde</option>
        </select>
        <button >Alterar</button>
    </form>
</body>
</html>