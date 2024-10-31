<?php
class Pessoa{
    public function __construct(
        protected string $nome = ""
    ){}

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
}