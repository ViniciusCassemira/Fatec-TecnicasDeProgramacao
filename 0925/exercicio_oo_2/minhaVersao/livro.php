<?php

class Livro extends Publicacoes{
    public function __construct(
        string $dataPublicacao ="",
        string $titulo ="",
        private string $sinopse = "",
        private string $isbn = "",
        private $genero = [],
        private $autor = [],
        $editora = null
    ){
        parent::__construct($dataPublicacao,$titulo,$editora);
    }

    public function setSinopse($sinopse){
        $this->sinopse = $sinopse;
    }
    public function getSinopse(){
        return $this->sinopse;
    }

    public function setIsbn($isbn){
        $this->isbn = $isbn;
    }
    public function getIsbn(){
        return $this->isbn;
    }

    public function setGenero($genero){
        $this->genero[] = $genero;
    }
    public function getGenero(){
        return $this->genero;
    }

    public function setAutor($autor){
        $this->autor[] = $autor;
    }
    public function getAutor(){
        return $this->autor;
    }        
}