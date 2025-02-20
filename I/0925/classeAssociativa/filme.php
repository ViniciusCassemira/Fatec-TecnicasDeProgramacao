<?php
class Filme{
    public function __construct(private string $nome = ""){

    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
}

?>