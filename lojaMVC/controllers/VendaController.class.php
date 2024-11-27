<?php
	date_default_timezone_set("America/Sao_Paulo");
	
	if(!isset($_SESSION))
	{
		session_start();
	}
	class vendaController
	{
		public function mostrar_carrinho()
		{
			require_once "views/carrinho.php";
		}
		public function inserir_carrinho()
		{
			if(isset($_GET["id"]))
			{
				$linha = -1;
				$achou = false;
				if(isset($_SESSION["carrinho"]))
				{
					foreach($_SESSION["carrinho"] as $linha=>$dado)
					{
						if($dado["id"] == $_GET["id"])
						{
							$achou = true;
						}
					}//fim foreach
				}//fim if isset
				//verificar se o produto não está no carrinho
				if(!$achou)
				{
					//inserir no carrinho
					
					//buscar os dados do produto BD
					$produto = new Produto($_GET["id"]);
					
					$produtoDAO = new ProdutoDAO();
					$retorno = $produtoDAO->buscar_um_produto($produto);
					
					//guardar na sessão
					$_SESSION["carrinho"][$linha + 1]["id"] = $retorno[0]->id_produto;
					
					$_SESSION["carrinho"][$linha + 1]["nome"] = $retorno[0]->nome;
					
					$_SESSION["carrinho"][$linha + 1]["preco"] = $retorno[0]->preco;
					
					$_SESSION["carrinho"][$linha + 1]["quantidade"] = 1;
				}//fim if achou
				header("location:/lojamvc/mostrar_carrinho");
				die();
			}//if 
		}
		public function alterar_carrinho()
		{
			if(isset($_GET["linha"]))
			{
				$_SESSION["carrinho"][$_GET["linha"]]["quantidade"] = $_GET["quant"];
			}
		}
		public function excluir_carrinho()
		{
			if(isset($_GET["linha"]))
			{
				unset($_SESSION["carrinho"][$_GET["linha"]]);
				header("location:/lojamvc/mostrar_carrinho");
				die();
			}
		}
		public function finalizar_venda()
		{
			$msg = "";
			//verificar se está logado
			if(!isset($_SESSION["nome"]))
			{
				header("location:/lojamvc/login");
				die();
			}
			if($_POST)
			{
				$parcela = 0;
				if(isset($_POST["parcela"]))
				{
					$parcela = $_POST["parcela"];
				}
				if(!isset($_POST["forma_pagamento"]))
				{
					$msg = "Escolha uma forma de pagamento";
				}
				else
				{
					//gravar a venda no BD
					$usuario = new Usuario($_SESSION["idusuario"]);
					$venda = new Venda(data_venda:date("Y-m-d"), usuario:$usuario, forma_pagamento:$_POST["forma_pagamento"], parcelas:$parcela);
					
					foreach($_SESSION["carrinho"] as $item)
					{
						$produto = new Produto($item["id"]);
						$venda->setItens(0, $item["quantidade"], $item["preco"], $produto);
					}
					
					$vendaDAO = new VendaDAO();
					$retorno = $vendaDAO->inserir($venda);
				
					//apagar carrinho da sessão
					unset($_SESSION["carrinho"]);
					
					//voltar para home
					header("location:/lojamvc/?msg=$retorno");
					die();
				}
				
			}
			require_once "views/formas_pagamentos.php";
				
			
		}
	}
?>