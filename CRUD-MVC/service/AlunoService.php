<?php

include_once(__DIR__ . "/../model/Aluno.php");
    
class AlunoService{

    public function validar(Aluno $aluno){

        $erros = array();

        if(! $aluno->getNome()){
            array_push($erros, "Preencha o campo nome");
        }
        if(! $aluno->getIdade()){
            array_push($erros, "Preencha o campo idade");
        }
        if(! $aluno->getEstrangeiro()){
            array_push($erros, "Selecione se é Estrangeiro");
        }
        if(! $aluno->getCurso()){
            array_push($erros, "Selecione o curso");
        }

        return $erros;
    }

}