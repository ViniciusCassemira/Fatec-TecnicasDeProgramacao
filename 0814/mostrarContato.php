<?php 
    // early return
    if(!$_GET){
        return header('Location: index.html');
    }

    require_once "Cliente.php";

    $obj = new Cliente();

    $obj->nome = $_GET["nome"];
    $obj->sobrenome = $_GET["sobrenome"];

    if(!$_GET['cpf']){
        return "Nao existe cpf";
    }
    
    $obj->cpf = $_GET["cpf"]; 

    echo "<pre>";
    var_dump($obj);
    echo "</pre>";

    $obj->inserir(); echo '<br>';
    $obj->falarOi(1);

//  echo "<h1 style='color: blue'>Seu nome é " . $_GET["nome"] . "</h1><br>";
//  echo "Seu sobrenome é {$_GET["sobrenome"]}<br>"; 
?>