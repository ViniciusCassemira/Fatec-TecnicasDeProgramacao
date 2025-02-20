<?php

require_once "filme.php";
require_once "ator.php";
require_once "papel.php";

$ator = new Ator('Brad Pitt');
$filme = new Filme('Clube da luta');
$papel = new Papel('Tyler Durden' ,$filme ,$ator);

echo "<pre>";
var_dump($papel);
echo "</pre>";

echo "Nome do papel: {$papel->getNome()}<br>";
echo "Nome do filme: {$papel->getFilme()->getNome()}<br>";
echo "Nome do Ator: {$papel->getAtor()->getNome()}<br>";