<?php 
// early return
if(!$_GET){
    return header('Location: index.html');
}

require_once "Cliente.php";

$obj = new Cliente($_GET["nome"],$_GET["sobrenome"],$_GET["cpf"]);
// $obj->nome = $_GET["nome"];
// $obj->sobrenome = $_GET["sobrenome"];
// $obj->cpf = $_GET["cpf"]; 

//abrir conexao com  o banco de dados
$conect = $obj->conexao();
$msg = $obj->inserir($conect);

header("location:index.php?msg=$msg");
die();

// echo "<pre>";
// var_dump($obj);
// echo "</pre>";

// $obj->inserir(); echo '<br>';
// $obj->falarOi(1);