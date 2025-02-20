<?php

class Fornecedor{
    public function __construct(
        private string $razaoSocial = "", 
        private string $cnpj = "",
        private string $telefone = "",
        private array $produto = array()
    ){}

    public function getRazaoSocial(){
        return $this->razaoSocial;
    }
    public function setRazaoSocial($razaoSocial){
        $this->razaoSocial = $razaoSocial;
    }

    public function getCnpj(){
        return $this->cnpj;
    }
    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getProduto(){
        return $this->produto;
    }
    public function setProduto(Produto $produto){
        $this->produto[] = $produto;
    }
}