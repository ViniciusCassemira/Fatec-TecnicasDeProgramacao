<?php

class Professor extends Pessoa{
    public function __construct(
        private string $titulacao = "",
        string $nome = "",
        int $ddd,
        string $telefone,
        $pessoa = null,
        private $aluno = []
    ){
        parent:: __construct($nome,$ddd,$telefone,$pessoa);
    }

    public function setTitulacao($titulacao){
        $this->titulacao = $titulacao;
    }
    public function getTitulacao(){
        return $this->titulacao;
    }

    public function getAluno(){
        return $this->aluno;
    }
    public function setAluno($aluno){
        $this->aluno[] = $aluno;
    }
}