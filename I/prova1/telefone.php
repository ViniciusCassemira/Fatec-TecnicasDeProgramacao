<?php

class Telefone{
    public function __construct(
        private int $ddd = 0,
        private string $telefone = "",
        private $pessoa = null
        ){}

    public function getDdd(){
        return $this->ddd;
    }
    public function setDdd($ddd){
        $this->ddd = $ddd;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getPessoa(){
        return $this->pessoa;
    }
    public function setPessoa($pessoa){
        $this->pessoa = $pessoa;
    }
}