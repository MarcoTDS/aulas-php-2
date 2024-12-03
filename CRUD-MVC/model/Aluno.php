<?php

include_once(__DIR__ . "/Curso.php");
    
class Aluno{
    private int $id;
    private string $nome;
    private int $idade;
    private string $estrangeiro;
    private Curso $curso;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of estrangeiro
     */ 
    public function getEstrangeiro()
    {
        return $this->estrangeiro;
    }

    public function getEstrangeiroTexto(){
        if($this->estrangeiro && $this->estrangeiro == 'S'){
            return "Sim";
        }
        return "Não";
    }

    /**
     * Set the value of estrangeiro
     *
     * @return  self
     */ 
    public function setEstrangeiro($estrangeiro)
    {
        $this->estrangeiro = $estrangeiro;

        return $this;
    }

    /**
     * Get the value of curso
     */ 
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */ 
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
}