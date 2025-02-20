<?php
	class CategoriaController
	{
		public function listar()
		{
			$categoriaDAO = new CategoriaDAO();
			$retorno = $categoriaDAO->buscar_todas();
			require_once "views/listar_categorias.php";
		}
		public function inserir()
		{
			$msg = "";
			if($_POST)
			{
				if(empty($_POST["descritivo"]))
				{
					$msg = "Preencha o descritivo";
				}
				else
				{
					//salvar no banco de dados
					$categoria = new Categoria(descritivo:$_POST["descritivo"]);
					
					$categoriaDAO = new categoriaDAO();
					$retorno = $categoriaDAO->inserir($categoria);
					header("location:/lojaMVC/categoria");
				}
			}
			require_once "views/form_categoria.php";
		}
		public function excluir()
		{
			if(isset($_GET["id"]))
			{
				$categoria = new Categoria($_GET["id"]);
				$categoriaDAO = new categoriaDAO();
				$retorno = $categoriaDAO->excluir_categoria($categoria);
				header("location:/lojamvc/categoria?msg=$retorno");
			}
		}
		public function alterar()
		{
			$msg = "";
			if($_POST)
			{
				if(empty($_POST["descritivo"]))
				{
					$msg = "Preencha o descritivo";
				}
				else
				{
					//alterar o registro no banco
					$categoria = new Categoria($_POST["idcategoria"], $_POST["descritivo"]);
					$categoriaDAO = new categoriaDAO();
					$retorno = $categoriaDAO->alterar_categoria($categoria);
					header("location:/lojamvc/categoria?msg=$retorno");
					
				}
			}
			if(isset($_GET["id"]))
			{
				$categoria = new Categoria($_GET["id"]);
				$categoriaDAO = new categoriaDAO();
				$retorno = $categoriaDAO->buscar_uma_categoria($categoria);
			}
			require_once "views/edit_categoria.php";
		}
	}//fim classe
?>