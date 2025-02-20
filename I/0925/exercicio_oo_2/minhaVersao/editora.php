<?php

class Editora extends Pessoa{

    public function __construct(
        private string $cnpj = "",
        string $nome = "",
        string $dataPublicacao = "",
        string $titulo = "",
        $editora = null,
        private array $publicacoes = []
    ){
            parent::__construct($nome);
            $this->publicacoes[] = new publicacoes($dataPublicacao, $titulo, $editora);
    }

    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }
    public function getCnpj(){
        return $this->cnpj;
    }

    public function setPublicacoes($publicacoes){
        $this->publicacoes[] = $publicacoes;
    }
    public function getPublicacoes(){
        return $this->publicacoes;
    }
}