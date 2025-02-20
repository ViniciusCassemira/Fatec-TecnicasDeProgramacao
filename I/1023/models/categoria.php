<?php

class Categoria{
    public function __construct(private int $idCategoria = 0, private string $descritivo ="")
    {}

    public function getIdCategoria(){
        return $this->idCategoria;
    }

    public function getDescritivo(){
        return $this->descritivo;
    }
}