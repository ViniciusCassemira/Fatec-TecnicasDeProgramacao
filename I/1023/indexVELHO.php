<?php
require_once "./rotas.php";

  //autoload das classes
spl_autoload_register(function($class) {
    if (file_exists("controllers/" . $class . ".php")) {
        require_once "controllers/" . $class . ".php";
    } else if (file_exists("models/" . $class . ".php")) {
        require_once "models/" . $class . ".php";
    } else{
        die("Classe {$class} não existe");
    }
});

//tratar requisição
$nomeRota = parse_url($_SERVER['REQUEST_URI'])["path"];

// $nomeRota = substr($nomeRota,strpos($nomeRota,"/",1));
//elimina o nome da pasta atrás do /. Exemplo: localhost/mvc/inserir_produto -> /inserir_produto
//usado para reduzir caminho de rotas 
echo $nomeRota;

$route->verificarRota($_SERVER["REQUEST_URI"],$nomeRota);