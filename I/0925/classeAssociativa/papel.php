<?php
class Papel{
    public function __construct(private string $nome = "",
    private $filme = null,
    private $ator = null){

    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    
    public function setFilme($filme){
        $this->filme = $filme;
    }
    public function getFilme(){
        return $this->filme;
    }

    public function setAtor($ator){
        $this->ator = $ator;
    }

    public function getAtor(){
        return $this->ator;
    }
}

?>