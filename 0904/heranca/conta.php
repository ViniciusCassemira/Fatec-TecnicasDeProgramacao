<?php
class Conta{
    public function __construct(
    protected string $agencia = "",
    protected string $numero = "",
    protected string $titular = "",
    protected float $saldo = 0.00
    ){}

    public function getAgencia(){
        return $this->agencia;
    }
    public function setAgencia(string $agencia){
        $this->agencia = $agencia;
    }

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero(string $numero){
        $this->numero = $numero;
    }

    public function getTitular(){
        return $this->titular;
    }
    public function setTitular(string $titular){
        $this->titular = $titular;
    }

    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo(float $saldo){
        $this->saldo = $saldo;
    }

    public function sacar(float $valor){

        $this->saldo -= $valor;
        // $this->saldo = $this->saldo - $valor;
    }

    public function depositar(float $valor){

        $this->saldo += $valor;
        // $this->saldo = $this->saldo + $valor;
    }
}
?>