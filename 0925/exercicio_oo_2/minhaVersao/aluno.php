<?php

class Aluno extends Pessoa{
    public function __construct(
        private string $ra = "",
        string $nome = ""
    ){
        parent::__construct($nome);
    }

    public function setRa($ra){
        $this->ra = $ra;
    }
    public function getRa(){
        return $this->ra;
    }
}