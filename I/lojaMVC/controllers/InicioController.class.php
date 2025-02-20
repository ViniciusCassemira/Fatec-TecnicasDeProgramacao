<?php
	class InicioController
	{
		public function inicio()
		{
			$categoriaDAO = new CategoriaDAO();
			$retorno = $categoriaDAO->buscar_todas();
            $produtoDAO = new ProdutoDAO();
            $produtos = $produtoDAO->buscar_todos_Ativos();
			require_once "views/menu.php";
		}
	}//fim da classe
?>