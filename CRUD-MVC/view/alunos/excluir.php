<?php
    
include_once(__DIR__ . "/../../controller/AlunoController.php");
include_once(__DIR__ . "/../../model/Aluno.php");

$aluno = new Aluno();

$aluno->setId($_GET['id']);

$alunoCont = new AlunoController();

$alunoCont->excluir($aluno);