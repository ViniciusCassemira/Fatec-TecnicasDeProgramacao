<?php
    class usuarioController{
        public function listar(){
            echo "<h1>Lista de usuários</h1>";
            echo "estou na classe usuarioController e executei o método listar";

            //busca os dados no BD
            require_once "models/usuario.php";
            $usuario = new Usuario();
            $retorno = $usuario->buscarTodosUsuarios();

            //mostrar os dados na view
            require_once "views/listarUsuarios.php";
        }

        public function inserir(){
            echo "Estou no inserir";
        }

        public function alterar(){
            echo "Estou no alterar";
        }

        public function excluir(){
            echo "Estou no excluir";
        }
    }
?>