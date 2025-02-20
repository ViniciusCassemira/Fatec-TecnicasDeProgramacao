<?php

class Consulta{
    public function __construct(
        private string $historico = ""
    ){}

    public function setHistorico($historico){
        $this->historico = $historico;
    }
    public function getHistorico(){
        return $this->historico;
    }
}