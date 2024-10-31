<?php

class Rotas {
    public array $rotas = [];
    
    public function get(string $nomeRota, array $dados) {
        $this->rotas["GET"][$nomeRota] = $dados;
    }

    public function post(string $nomeRota, array $dados) {
        $this->rotas["POST"][$nomeRota] = $dados;
    }

    public function verificarRota($metodo, $nomeRota) {
        if (isset($this->rotas[$metodo][$nomeRota])) {
            $dados = $this->rotas[$metodo][$nomeRota];
            $method = $dados[1]; // Método do controller
            $obj = new $dados[0]; // Instância do controller
            return $obj->$method(); // Chama o método do controller
        }
        exit("Rota inválida");
    }
}

$route = new Rotas();
$route->get("/", [inicioController::class, "inicio"]);
$route->get("/categoria", [categoriaController::class, "listar"]);
$route->get("/categoriaInserir", [categoriaController::class, "inserir"]);
$route->post("/categoriaInserir", [categoriaController::class, "inserir"]);
$route->get("/produto", [produtoController::class, "listar"]);