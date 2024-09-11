<?php
class Paciente{
    public function __construct(
        private string $nome="",
        private string $rg="",
        private string $endereco = "",
        private string $telefone = "",
        private string $dataNascimento= "",
        private string $profissao = ""
    ){}

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    
    public function setRg($rg){
        $this->rg = $rg;
    }
    public function getRg(){
        return $this->rg;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getEndereco(){
        return $this->endereco;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getTelefone(){
        return $this->telefone;
    }

    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }
    public function getDataNascimento(){
        return $this->dataNascimento;
    }

    public function setProfissao($profissao){
        $this->profissao = $profissao;
    }
    public function getProfissao(){
        return $this->profissao;
    }
}
?>