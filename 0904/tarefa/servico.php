<?php

class Servico{
    public function __construct(
        protected string $descricao = "",
        protected float $valor = 0
    ){}
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function getDescricao(){
        return $this->descricao;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }
    public function getValor(){
        return $this->valor;
    }
}