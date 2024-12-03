<?php 

include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Aluno.php");
include_once(__DIR__ . "/../model/Curso.php");


class AlunoDAO{
    
    public function list(){
        $conn = Connection::getConnection();

        $sql = "SELECT * FROM alunos";

        $stm = $conn->prepare($sql);
        $stm->execute();

        $result = $stm->fetchAll();

        $alunos = $this->mapAlunos($result);

        return $alunos;
    }

    private function mapAlunos($registros){
        $alunos = array();
        foreach($registros as $r){
            $aluno = new Aluno();
            $aluno->setId($r['id']);
            $aluno->setNome($r['nome']);
            $aluno->setIdade($r['idade']);
            $aluno->setEstrangeiro($r['estrangeiro']);
            $curso = new Curso();
            $curso->setId($r['id_curso']);
            $aluno->setCurso($curso);

            array_push($alunos, $aluno);
        }
        return $alunos;
    }

}