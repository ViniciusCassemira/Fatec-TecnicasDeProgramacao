<?php

class categoriaController{
    
    public function listar(){
        $categoriaDAO = new CategoriaDAO();
        $retorno =  $categoriaDAO->buscarTodas();
        require_once "views/listarCategorias.php";
    }

    public function inserir(){
        $msg = "";
        if($_POST){
            if(empty($_POST["descritivo"])){
            $msg = "Preencha o campo corretamente.";
            
            }else{
                $categoria = new Categoria(descritivo:$_POST["descritivo"]);

                $categoriaDAO = new CategoriaDAO();
                $retorno =  $categoriaDAO->inserir($categoria);
                header("Location: /categoria");
            }
        }
        require_once "views/formularioCategoria.php";
    }
}