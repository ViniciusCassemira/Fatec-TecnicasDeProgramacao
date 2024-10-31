<?php

class Produto{
    public function __construct(
        private string $nome = "",
        private string $descricao = "",
        private string $preco = "",
        // private string $imagem = "",
        private Categoria $categoria = new Categoria() 
    ){}

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function getDescricao(){
        return $this->descricao;
    }

    public function setPreco($preco){
        $this->preco = $preco;
    }
    public function getPreco(){
        return $this->preco;
    }

    // public function setImagem($imagem){
    //     $this->imagem = $imagem;
    // }
    // public function getImagem(){
    //     return $this->imagem;
    // }
    
    public function setCategoria(Categoria $categoria){
        $this->categoria = $categoria;
    }
    public function getCategoria(){
        return $this->categoria;
    }

}