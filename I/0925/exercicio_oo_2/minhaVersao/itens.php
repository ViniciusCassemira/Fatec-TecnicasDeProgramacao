<?php

class Itens{
    public function __construct(
        private $livro = null,
        private string $dataDevolucao = ""
    )
    {}

    public function setDataDevolucao($dataDevolucao){
        $this->dataDevolucao = $dataDevolucao;
    }
    public function getDataDevolucao(){
        return $this->dataDevolucao;
    }

    public function setLivro($livro){
        $this->livro = $livro;
    }
    public function getLivro(){
        return $this->livro;
    }
}