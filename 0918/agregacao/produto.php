<?php

class Produto{
    //fortemente tipado
    public function __construct(
        private string $nome ="",
        private string $descricao = "",
        private float $preco = 0.00,
        private int $estoque = 0,
        private Categoria $categoria = new Categoria()
    ){}

    //fracamente tipado
    // public function __construct(
    //     private string $nome ="",
    //     private string $descricao = "",
    //     private float $preco = 0.00,
    //     private int $estoque = 0,
    //     private $categoria = null
    // ){}

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function getEstoque(){
        return $this->estoque;
    }
    public function setEstoque($estoque){
        $this->estoque = $estoque;
    }

    public function getCategoria(){
        return $this->categoria;
    }
    //usado para sobescrever o objeto categoria
    public function setCategoria(Categoria $categoria){
        $this->categoria= $categoria; 
    }
}