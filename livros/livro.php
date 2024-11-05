<?php
include_once ("manipulaDados.php");

$livros = buscarDados('livros.json');

// Adiciona novo livro se título, gênero e quantidade de páginas foram enviados
if (isset($_POST['titulo'])) {
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $pgs = $_POST['qtdPag'];
    $autor = $_POST['autor'];
    $id = vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex(random_bytes(16)), 4));

    $livro = array("id" => $id, "titulo" => $titulo, "genero" => $genero, "paginas" => $pgs, "autor" =>$autor);
    array_push($livros, $livro);
    salvarDados($livros, "livros.json");

    header("location: livro.php");
}

// Exclui livro se um ID foi enviado para exclusão
if (isset($_POST['excluir_id'])) {
    excluir($_POST['excluir_id'],$livros);
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
        <input type="text" name="autor" placeholder="Informe o autor">
        <br><br>
        <button type="submit">Cadastrar</button>
    </form>

    <h3>Lista de livros</h3>

    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Genêro</th>
            <th>Pégina</th>
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
                <td><?php echo $livro['autor']?></td>
                <td>
                    <form method="post" action="" style="display:inline;">
                        <input type="hidden" name="excluir_id" value="<?php echo $livro['id']; ?>">
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>