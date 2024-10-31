<?php

class Autor extends Pessoa{
    public function __construct(
        private string $nacionalidade = "",
        private array $livro = [],
        string $nome = ""
        ){
            parent::__construct($nome);
        }

    public function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function setLivro($livro){
        $this->livro[] = $livro;
    }
    public function getLivro(){
        return $this->livro;
    }
}