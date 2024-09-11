<?php

class LimpezaRestauracao extends servico{
    public function __construct(
        string $descricao = "",
        float $valor = 0,
        private string $materialUsado = "",
        private string $denteTratado = ""
    ){
        parent::__construct($descricao, $valor);
    }

    public function setMaterialUsado($materialUsado){
        $this->materialUsado = $materialUsado;
    }
    public function getMaterialUsado(){
        return $this->materialUsado;
    }
    
    public function setDenteTratado($denteTratado){
        $this->denteTratado = $denteTratado;
    }
    public function getDenteTratado(){
        return $this->denteTratado;
    }
}