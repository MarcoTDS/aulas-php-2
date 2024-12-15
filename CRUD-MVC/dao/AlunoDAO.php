<?php 

include_once(__DIR__ . "/../util/Connection.php");
include_once(__DIR__ . "/../model/Aluno.php");
include_once(__DIR__ . "/../model/Curso.php");


class AlunoDAO{
    
    public function list(){
        $conn = Connection::getConnection();

        $sql = "SELECT a.*, c.nome nome_curso, c.turno turno_curso FROM alunos a JOIN cursos c ON (c.id = a.id_curso)";

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
            $curso->setNome($r['nome_curso']);
            $curso->setTurno($r['turno_curso']);
            $aluno->setCurso($curso);

            array_push($alunos, $aluno);
        }
        return $alunos;
    }

    public function save(Aluno $aluno){

        $conn = Connection::getConnection();
        $sql = "INSERT INTO alunos (nome,idade,estrangeiro,id_curso) VALUES ( ?, ?, ?, ?)";

        $stm = $conn->prepare($sql);
        $stm->execute(array($aluno->getNome(),$aluno->getIdade(),$aluno->getEstrangeiro(), $aluno->getCurso()->getId()));

    }

    public function delete(Aluno $aluno){
        $conn = Connection::getConnection();
        $sql = "DELETE FROM alunos WHERE id = ?";
        $stm = $conn->prepare($sql);
        $stm->execute(array($aluno->getId()));
    }

}