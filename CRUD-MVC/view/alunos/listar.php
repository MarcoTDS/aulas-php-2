<?php

include_once(__DIR__ . "/../../controller/AlunoController.php");
$alunoCont = new AlunoController();

$alunos = $alunoCont->listar();

//print_r($alunos);

include_once(__DIR__ . "/../include/reader.php");
?>
    <h2>Listagem de alunos</h2>

    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Estrangeiro</th>
            <th>Curso</th>
        </tr>
        <?php foreach($alunos as $a) :?>

            <tr>
                <td><?= $a->getNome(); ?></td>
                <td><?= $a->getIdade(); ?></td>
                <td><?= $a->getEstrangeiroTexto() ?></td>
                <td><?= $a->getCurso()->getId(); ?></td>
            </tr>

        <?php endforeach; ?>
    </table>

<?php
    include_once(__DIR__ . "/../include/footer.php")
?>
