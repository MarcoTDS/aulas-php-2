<?php

include_once(__DIR__ . "/../../controller/AlunoController.php");
$alunoCont = new AlunoController();

$alunos = $alunoCont->listar();

//print_r($alunos);

include_once(__DIR__ . "/../include/header.php");
?>
    <h2>Listagem de alunos</h2>

    <div>
        <a href="inserir.php">Inserir</a>
    </div>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Estrangeiro</th>
            <th>Curso</th>
            <th>Excluir</th>
        </tr>
        <?php foreach($alunos as $a) :?>

            <tr>
                <td><?= $a->getNome(); ?></td>
                <td><?= $a->getIdade(); ?></td>
                <td><?= $a->getEstrangeiroTexto() ?></td>
                <td><?= $a->getCurso(); ?></td>
                <td><a href="excluir.php?id=<?= $a->getId()?>"><img src="../../img/btn_excluir.png"></a></td>
            </tr>

        <?php endforeach; ?>
    </table>

<?php
    include_once(__DIR__ . "/../include/footer.php")
?>
