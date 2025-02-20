<?php
require_once "./rotas.php";

// autoload das classes
spl_autoload_register(function($class) {
    if (file_exists("controllers/" . $class . ".php")) {
        require_once "controllers/" . $class . ".php";
    } else if (file_exists("models/" . $class . ".php")) {
        require_once "models/" . $class . ".php";
    } else{
        die("Classe {$class} não existe");
    }
});

// tratar requisição
$nomeRota = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$metodo = $_SERVER["REQUEST_METHOD"]; // Obtém o método HTTP (GET, POST, etc.)

// verifica a rota
$route->verificarRota($metodo, $nomeRota);
