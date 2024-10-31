<?php

class Categoria{
    public function __construct(
        private string $descritivo = ""
    ){}

    public function setDescritivo($descritivo){
        $this->descritivo = $descritivo;
    }
    public function getDescritivo(){
        return $this->descritivo;
    }
}