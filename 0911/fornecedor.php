<?php

class Fornecedor{
    public function __construct(
        private string $razaoSocial = "", 
        private string $cnpj = "",
        private string $telefone = "",
        private array $produto = array()
    ){}
}