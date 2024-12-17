<?php

    include_once(__DIR__ . "/../../model/Aluno.php");
    include_once(__DIR__ . "/../../model/Curso.php");
    include_once(__DIR__ . "/../../controller/AlunoController.php");
    include_once(__DIR__ . "/../../service/AlunoService.php");
    
    $msgErros = "";
    $aluno = null;
    $alunoCont = new AlunoController();
    
    if(isset($_POST['nome'])){
    
        $id = $_POST['id'];
        $nome = trim($_POST['nome']) ? trim($_POST['nome']) : null;
        $idade = is_numeric($_POST['idade']) ? $_POST['idade'] : null;
        $estrangeiro = trim($_POST['estrangeiro']) ? trim($_POST['estrangeiro']) : null;
        $curso = is_numeric($_POST['curso']) ? $_POST['curso'] : null;
    
        $aluno = new Aluno();
        $aluno->setId($id);
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
    
        $erros = $alunoCont->alterar($aluno);
    
        if(empty($erros)){
            header("location: listar.php");
            exit;
        }
        else{
            $msgErros = implode("<br>",$erros);
        }
    
    }

    else{
        $id = 0;

        if(isset($_GET['id']))
            $id = $_GET['id'];
        
        $aluno = $alunoCont->buscarPorId($id);

        if(! $aluno){
            echo "Aluno não encontrado<br>";
            echo "<a href='listar.php'>Voltar</a>";
        }
        
    }
        
    include_once(__DIR__ . "/form.php");