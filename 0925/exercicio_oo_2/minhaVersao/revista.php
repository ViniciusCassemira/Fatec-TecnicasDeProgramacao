<?php

class Revista extends Publicacoes{
    public function __construct(
        private string $numero,
        private string $issn,
        string $dataPublicacao ="",
        string $titulo ="",
        string $editora = null
        ){
            parent::__construct($dataPublicacao,$titulo,$editora);
        }

        public function getNumero(){
            return $this->numero;
        }
        public function setNumero($numero){
            $this->numero = $numero;
        }

        public function getIssn(){
            return $this->issn;
        }
        public function setIssn($issn){
            $this->issn = $issn;
        }
}