<?php

class Pessoa{
    public function __construct(
        protected string $nome = "",
        int $ddd = 0,
        string $telefone = "",
        $pessoa = null,
        private $telefones =[]

    ){
        $this->telefones[] = new Telefone($ddd,$telefone,$pessoa);
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getTelefone(){
        return $this->telefones;
    }
    public function setTelefone(int $ddd = 0, string $telefone = "", $pessoa = null){
        $this->telefones[] = new Telefone($ddd,$telefone,$pessoa);
    }
}