<?php
	class ProdutoController
	{
		public function listar()
		{
			$produtoDAO = new produtoDAO();
			$retorno = $produtoDAO->buscar_todos();
			require_once "views/listar_produtos.php";
		}
		public function inserir()
		{
			$msg = array("","","","","");
			$erro = false;
			if($_POST)
			{
				//verificação
				if(empty($_POST["nome"]))
				{
					$msg[0] = "Preencha o nome do produto";
					$erro = true;
				}
				if($_POST["categoria"] == "0")
				{
					$msg[3] = "Escolha uma categoria";
					$erro = true;
				}
				if($_FILES["imagem"]["name"] == "")
				{
					$msg[4] = "Escolha uma imagem";
					$erro = true;
				}
				else if($_FILES["imagem"]["type"] != "image/png" && $_FILES["imagem"]["type"] != "image/jpeg" && $_FILES["imagem"]["type"] != "image/jpg")
				{
					$msg[4] = "Tipo inválido";
					$erro = true;
				}
				if(!$erro)
				{
					//inserir no BD
					$categoria = new Categoria($_POST["categoria"]);
					
					$produto = new Produto(0,$_POST["nome"], $_POST["descricao"], $_POST["preco"], $_FILES["imagem"]["name"], "Ativa", $categoria);
					
					$produtoDAO = new ProdutoDAO();
					$retorno = $produtoDAO->inserir($produto);
					
					header("location:/lojamvc/produto?mensagem=$retorno");
					die();
					
				}
			}
			$categoriaDAO = new CategoriaDAO();
			$retorno = $categoriaDAO->buscar_todas();
			require_once "views/form_produto.php";
		}
		public function alterar()
		{
		}
		public function alterar_situacao()
		{
			if(isset($_GET["idproduto"]))
			{
				$produto = new Produto(id_produto:$_GET["idproduto"],situacao:$_GET["situacao"]);
				$produtoDAO = new ProdutoDAO();
				$produtoDAO->mudar_situacao($produto);
				header("Location:/lojamvc/produto");
				die();
			}
		}
		
		public function busca_produtos_categoria()
        {
            $produtoDAO = new produtoDAO();
			if(isset($_GET["idcategoria"]))
			{
				//buscar apenas os produtos da categoria escolhida
				$categoria = new Categoria($_GET["idcategoria"]);
				$produto = new Produto(categoria:$categoria);
				$produtos = $produtoDAO->buscar_produtos_por_categoria($produto); 
				$categoriaDAO = new CategoriaDAO();
				$retorno = $categoriaDAO->buscar_todas();
				require_once "views/menu.php";
			}
            
        }//fim metodo busca_produtos_categorias
	}
?>