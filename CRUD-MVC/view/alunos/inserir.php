<?php

include_once(__DIR__ . "/../../model/Aluno.php");
include_once(__DIR__ . "/../../model/Curso.php");
include_once(__DIR__ . "/../../controller/AlunoController.php");


if(isset($_POST['nome'])){

    $nome = trim($_POST['nome']) ? trim($_POST['nome']) : null;
    $idade = is_numeric($_POST['idade']) ? $_POST['idade'] : null;
    $estrangeiro = trim($_POST['estrangeiro']) ? trim($_POST['estrangeiro']) : null;
    $curso = is_numeric($_POST['curso']) ? $_POST['curso'] : null;

    $aluno = new Aluno();
    $aluno->setNome($nome);
    $aluno->setIdade($idade);
    $aluno->setEstrangeiro($estrangeiro);
    if($curso != null){
        $cursoObj = new Curso;
        $cursoObj->setId($curso);
        $aluno->setCurso($cursoObj);
    }
    else{
        $aluno->setCurso(null);
    }
    $alunoCont = new AlunoController();
    $alunoCont->salvar($aluno);

}
    
include_once(__DIR__ . "/form.php");