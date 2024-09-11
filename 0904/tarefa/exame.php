<?php

class Exame extends Servico{
    public function __construct(
        string $descricao = "",
        float $valor = 0,
        private string $medidaPreventiva = "",
        private string $tipoDoExame = ""
    ){
        //por ser parametro, posso colocar outro
        //nome no construtor ex: $desc
        parent::__construct($descricao, $valor);
    }

    public function setMedidaPreventiva($medidaPreventiva){
        $this->medidaPreventiva = $medidaPreventiva;
    }
    public function getMedidaPreventiva(){
        return $this->medidaPreventiva;
    }

    public function setTipoDoExame($tipoDoExame){
        $this->tipoDoExame = $tipoDoExame;
    }
    public function getTipoDoExame(){
        return $this->tipoDoExame;
    }
}