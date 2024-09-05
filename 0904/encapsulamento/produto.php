<?php
    class Produto{
        public function __construct(
            private string $nome = '', 
            private string $descricao ='', 
            private int $estoque = 0, 
            private float $preco = 0.00){}

        //método gets e setters
        public function getNome(){
            return $this->nome;
        }
        public function setNome($novoNome){
            return $this->nome = $novoNome;
        }

        public function getDescricao(){
            return $this->descricao;
        }
        public function setDescricao($novaDescricao){
            return $this->nome = $novaDescricao;
        }

        public function getEstoque(){
            return $this->estoque;
        }
        public function setEstoque($novoEstoque){
            return $this->estoque = $novoEstoque;
        }

        public function getPreco(){
            return $this->preco;
        }
        public function setPreco($novoPreco){
            return $this->preco = $novoPreco;
        }

    }
?>