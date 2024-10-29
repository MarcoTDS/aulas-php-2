<?php
include_once ("salvarDados.php");

$livros = array();
    if(isset($_POST['titulo'])){
        $titulo = $_POST['titulo'];
        $genero= $_POST['genero'];
        $pgs = $_POST['qtdPag'];

        $id = vsprintf('%s%s-%s-%s-%s-%s%s%s',str_split(bin2hex(random_bytes(16)), 4));

        $livro = array("id"=>$id,"titulo"=>$titulo,"genero"=>$genero,"paginas"=>$pgs);

        array_push($livros, $livro);

        salvarDados($livros, "livros.json");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
</head>
<body>

    <h1>Cadastre o livro</h1>

    <h3>Formulário</h3>

    <form method="post" action="">
        <input type="text" name="titulo" placeholder="Informe o titulo">
        <br><br>
        <select name="genero">
            <option value="">---Selecione o genero---</option>
            <option value="D">Drama</option>
            <option value="F">Ficção</option>
            <option value="R">Romance</option>
            <option value="O">Outros</option>
        </select>
        <br><br>
        <input type="number" name="qtdPag" placeholder="Informe a quantidade de páginas">
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>

    <h3>Lista de livros</h3>
    
</body>
</html>