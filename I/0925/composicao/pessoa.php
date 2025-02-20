<?php
    class Pessoa{
        public function __construct(
            private string $nome ='',
            private string $cpf ='',
            string $logradouro = '',
            string $numero = '',
            string $cep ='',
            $pessoa = null,
            private array $endereco = [])
        {
            $this->endereco[] = new Endereco($logradouro,$numero,$cep,$pessoa);
        }
        
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }
        public function getCpf(){
            return $this->cpf;
        }

        public function setEndereco($logradouro,$numero,$cep,$pessoa){
            $this->endereco[] = new Endereco($logradouro,$numero,$cep,$pessoa);
        }
        public function getEndereco(){
            return $this->endereco;
        }
    }
?>