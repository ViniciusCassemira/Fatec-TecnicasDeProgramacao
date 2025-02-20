<?php

class Rotas{
    public array $rotas = [];
    
    public function get(string $nomeRota, array $dados){
        $this->rotas["GET"][$nomeRota] = $dados;
    }

    public function post(string $nomeRota, array $dados){
        $this->rotas["POST"][$nomeRota] = $dados;
    }

    public function verificarRota($metodo,$nomeRota){
        if(isset($this->rotas[$metodo][$nomeRota])){

            $dados = $this->rotas[$metodo][$nomeRota];

            $method = $dados[1];

            $obj = new $dados[0];
            
            return $obj->$method();
        }
        exit("Rota inválida");
    }
}

$route = new Rotas();
$route->get("/",[inicioController::class,"inicio"]);