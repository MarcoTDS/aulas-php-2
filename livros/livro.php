<?php
include_once ("manipulaDados.php");

$livros = buscarDados('livros.json');

$msgErro = "";

$titulo = "";
$genero = "";
$pgs = "";
$autor = "";
// Adiciona novo livro se título, gênero e quantidade de páginas foram enviados
if (isset($_POST['titulo'])) {
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $pgs = $_POST['qtdPag'];
    $autor = $_POST['autor'];

    if($titulo == ""){
        $msgErro = "Informe o título!<br>";
    }
    if($genero == ""){
        $msgErro=$msgErro."Informe o gênero!<br>";
    }
    if($pgs == null){
        $msgErro=$msgErro."Informe as páginas!<br>";
    }
    if($autor == ""){
        $msgErro = $msgErro." Informe o autor!<br>";
    }

    if(! $msgErro){
        $id = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4));

        $livro = array("id" => $id, "titulo" => $titulo, "genero" => $genero, "paginas" => $pgs, "autor" =>$autor);
        array_push($livros, $livro);
        salvarDados($livros, "livros.json");

        header("location: livro.php");
    }
}

// Exclui livro se um ID foi enviado para exclusão
if (isset($_GET['excluir_id'])) {
    excluir($_GET['excluir_id'],$livros);
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
    <!--<form method="post" action="" onsubmit="return validaForm()">-->
        <input type="text" id="titulo" name="titulo" placeholder="Informe o titulo" value="<?php echo $titulo;?>">
        <br><br>
        <select id="genero" name="genero">
            <option >---Selecione o genero---</option>
            <option value="D" <?php echo ($genero == "D") ? "selected" :""; ?>>Drama</option>
            <option value="F" <?php echo ($genero == "F") ? "selected" :""; ?>>Ficção</option>
            <option value="R" <?php echo ($genero == "R") ? "selected" :""; ?>>Romance</option>
            <option value="O" <?php echo ($genero == "O") ? "selected" :""; ?>>Outros</option>
        </select>
        <br><br>
        <input id="pgs" type="number" name="qtdPag" placeholder="Informe a quantidade de páginas" value="<?php echo $pgs;?>">
        <br><br>
        <input id="autor" type="text" name="autor" placeholder="Informe o autor" value="<?php echo $autor;?>">
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>

    <div id="divMsg" style="color: red;">
        <?php echo $msgErro; ?>
    </div>

    <h3>Lista de livros</h3>

    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Genêro</th>
            <th>Página</th>
            <th>Autor</th>
            <th>Ações</th>
        </tr>
        <?php foreach($livros as $livro) : ?>
            <tr>
                <td><?php echo $livro['id']; ?></td>
                <td><?php echo $livro['titulo']; ?></td>
                <?php
                    switch($livro['genero']){
                        case 'D':
                            echo "<td>Drama</td>";
                            break;
                        case 'F':
                            echo "<td>Ficção</td>";
                            break;
                        case 'R':
                            echo "<td>Romance</td>";
                            break;
                        case 'O':
                            echo "<td>Outros</td>";
                            break;
                    }
                ?>
                <td><?php echo $livro['paginas']; ?></td>
                <td><?php echo $livro['autor'];?></td>
                <td>
                <a href="livros.php?excluir_id=<?php echo $livro['id'] ?>" onclick="return confirm('Confirma a exclusão do livro?');">Excluir</a> 
                    <!--<form method="post" action="" style="display:inline;">
                        <input type="hidden" name="excluir_id" value="<?php echo $livro['id']; ?>">
                        <button onclick="return confirm('Confirma a exclusão do livro?');" type="submit">Excluir</button>
                    </form>-->
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    
    <script src="valida.js"></script>
</body>
</html>