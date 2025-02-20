<?php

class Publicacoes
{
    public function __construct(
        protected string $dataPublicacao = "",
        protected string $titulo = "",
        protected $editora = null
    ) {}

    public function getDataPublicacao(){
        return $this->dataPublicacao;
    }
    public function setDataPublicacao($dataPublicacao){
        $this->dataPublicacao = $dataPublicacao;
    }

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getEditora(){
        return $this->editora;
    }
    public function setEditora($editora){
        $this->editora = $editora;
    }
}