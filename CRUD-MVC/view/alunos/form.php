<?php
#Página com o formulário de alunos

//Inclui o HEADER
include_once(__DIR__ . "/../include/header.php");
include_once(__DIR__ . "/../../controller/CursoController.php");

$cursoCont = new CursoController();
$cursos = $cursoCont->listar();
            
?>

<h3>FORMULÁRIO DE ALUNO</h3>

<form name="frmCadastroAlunos" method="POST" >
    <div>
        <label for="txtNome">Nome:</label>
        <input type="text" id="txtNome" name="nome" 
            size="45" maxlength="70" value="<?= ($aluno ? $aluno->getNome() : '') ?>"/>
    </div>

    <div>
        <label for="txtIdade">Idade:</label>
        <input type="number" id="txtIdade" name="idade" value="<?= ($aluno ? $aluno->getIdade() : '') ?>"/>
    </div>

    <div >
        <label for="selEst">Estrangeiro:</label>
        <select id="selEst" name="estrangeiro">
            <option value="">---Selecione---</option>
            <option <?= ($aluno && $aluno->getEstrangeiro() == 'S' ? 'selected'  : '') ?> value="S">Sim</option>
            <option <?= ($aluno && $aluno->getEstrangeiro() == 'N' ? 'selected'  : '') ?> value="N">Não</option>
        </select>
    </div>

    <div>
        <label for="selCurso">Curso:</label>
        <select id="selCurso" name="curso">
            <option value="">---Selecione---</option>
            <?php foreach($cursos as $c) :?>

            <option <?= ($aluno && $aluno->getCurso() && $aluno->getCurso()->getId() == $c->getId() ? 'selected'  : '') ?> value="<?= $c->getId()?>"><?= $c?></option>

            <?php endforeach;?>
       </select>        
    </div>

    <input type="hidden" name="id" value=<?= ($aluno ? $aluno->getid() : '') ?>>

    <button type="submit">Gravar</button>
</form>

<?php if($msgErros):?>
<div id="msgErro" style="color: red;">
    <?= $msgErros ?>
</div>
<?php endif;?>

<div>
    <a href="listar.php">Voltar</a>
</div>

<?php 
//Inclui o FOOTER
require_once(__DIR__ . "/../include/footer.php");
?>