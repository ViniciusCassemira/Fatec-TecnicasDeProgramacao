<?php

class Categoria{
    public function __construct(private string $descritivo ='',
    private array $produto=[] ){}

    public function getDescritivo(){
        return $this->descritivo;
    }
    public function getProduto(){
        return $this->produto;
    }
    
    public function setProduto(Produto $produto){
        $this->produto[] = $produto;
    }
}