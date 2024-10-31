<?php

class Disciplina{
    public function __construct(
        private string $nome = "",
        private int $cargaHoraria = 0, 
        private $aluno = null,
        private $professor = null
    ){}

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCargaHoraria(){
        return $this->cargaHoraria;
    }
    public function setCargaHoraria($cargaHoraria){
        $this->cargaHoraria = $cargaHoraria;
    }

    public function getAluno(){
        return $this->aluno;
    }
    public function setAluno($aluno){
        $this->aluno = $aluno;
    }

    public function getProfessor(){
        return $this->professor;
    }
    public function setProfessor($professor){
        $this->professor = $professor;
    }
}