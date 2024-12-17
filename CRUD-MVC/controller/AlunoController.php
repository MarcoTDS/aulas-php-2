<?php
include_once(__DIR__ . "/../dao/AlunoDAO.php");
include_once(__DIR__ . "/../service/AlunoService.php");
    
class AlunoController{

    private AlunoDAO $alunoDao;
    private AlunoService $alunoServ;

    public function __construct(){
        $this->alunoDao = new AlunoDAO();
        $this->alunoServ = new AlunoService();
    }
    
    public function listar(){

        $alunos = $this->alunoDao->list();

        return $alunos;
    }

    public function salvar(Aluno $aluno){

        $erros = $this->alunoServ->validar($aluno);
        if($erros)
            return $erros;

        $this->alunoDao->save($aluno);

        return array();
        
    }

    public function excluir(Aluno $aluno){
        $this->alunoDao->delete($aluno);

        header("location: listar.php");
    }

    public function alterar(Aluno $aluno){
        $erros = $this->alunoServ->validar($aluno);
        if($erros)
            return $erros;

        $this->alunoDao->update($aluno);

        return array();
    }

    public function buscarPorId(int $id){
        $aluno = $this->alunoDao->findById($id);
        return $aluno;
    }

}