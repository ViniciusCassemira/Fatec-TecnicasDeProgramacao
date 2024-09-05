<?php

class Corrente extends Conta{
    public function __construct(
        private float $limite = 0,
        string $agencia = "",
        string $numero = "",
        string $titular = "",
        float $saldo = 0)
        {
            parent::__construct($agencia, $numero, $titular, $saldo);
        }
    
    public function getLimite(){
        return $this->limite;
    }
    public function setLimite($limite){
        $this->limite = $limite;
    }
}
?>  