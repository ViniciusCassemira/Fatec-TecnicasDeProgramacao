<?php
class Endereco{
    public function __construct(
        private string $logradouro = '',
        private string $numero = '',
        private string $cep = '',
        private $pessoa = null
    ){}
    
    public function setLogradouro($logradouro){
        $this->logradouro = $logradouro;
    }
    public function getLogradouro(){
        return $this->logradouro;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function getNumero(){
        return $this->numero;
    }
    
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCep(){
        return $this->cep;
    }

    public function setPessoa($pessoa){
        $this->pessoa = $pessoa;
    }
    public function getPessoa(){
        return $this->pessoa;
    }
}