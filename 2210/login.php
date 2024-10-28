<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

   
    
    <form action="login.php" method="post">

        <input name="login" type="text" placeholder="Informe login">
        <br><br>
        <input name="senha" type="password" placeholder="Informe a senha">
        <br><br>
        <button type="submit">Enviar</button>

    </form>
    <?php
        if($_POST['login'] == "ifpr" && $_POST['senha'] == "tads"){
            echo "<h1>Bem vindo ao TADS</h1>";
        }
    ?>

</body>
</html>