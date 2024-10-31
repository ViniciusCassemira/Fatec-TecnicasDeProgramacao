<?php 
require_once "./pessoa.php";
require_once "./endereco.php";

//endereco saber a quem pertence
$pessoa1 = new Pessoa("Michel Teló","000.000.000-61");
$endereco1 = new Endereco("Rua das Palmeiras","171","09123000",$pessoa1);
$endereco2 = new Endereco("Rua XV de Novembro","157","12345678",$pessoa1);

echo "<pre>";
var_dump($endereco1);
echo "</pre>";

echo "<pre>";
var_dump($pessoa1);
echo "</pre>";

echo "<h3>Endereço</h3>";
echo "Logradouro: {$endereco1->getLogradouro()}<br>";
echo "Número: {$endereco1->getNumero()}<br>";
echo "CEP: {$endereco1->getCep()}<br>";
echo "<h4>O endereço pertence:</h4>";
echo "Nome:{$endereco1->getPessoa()->getNome()}<br>";
echo "CPF:{$endereco1->getPessoa()->getCpf()}<br>";

//pessoa quais são os endereços
$pessoa2 = new Pessoa("João da Silva","123.123.123-00",'Rua dos Santistas','244','55270009');
$pessoa2->setEndereco('Marrecos dupofi','007','34567999',null);

echo "<pre>";
var_dump($pessoa2);
echo "</pre>";

echo "<h3>Dados de Pessoa</h3>";
echo "nome: {$pessoa2->getNome()}<br>";
echo "CPF: {$pessoa2->getCpf()}<br>";

echo "<h4>Endereço</h4>";

foreach($pessoa2->getEndereco() as $endereco){
    echo "Logradouro: {$endereco->getLogradouro()} - {$endereco->getNumero()}<br>";
    echo "CEP: {$endereco->getCep()}<br><br>";
}