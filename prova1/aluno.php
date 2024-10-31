<?php

class Aluno extends Pessoa{
    public function __construct(
        private string $ra = "",
        string $nome = "",
        int $ddd = 0,
        string $telefone = "",
        $pessoa = null,
        private $professor = []
    ){
        parent:: __construct($nome,$ddd,$telefone,$pessoa);
    }

    public function getRa(){
        return $this->ra;
    }
    public function setRa($ra){
        $this->ra = $ra;
    }

    public function getProfessor(){
        return $this->professor;
    }
    public function setProfessor($professor){
        $this->professor[] = $professor;
    }
}