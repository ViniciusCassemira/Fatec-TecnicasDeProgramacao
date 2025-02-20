<?php
	class Rotas
	{
		public array $rotas = [];
		
		public function get(string $nome_rota, array $dados)
		{
			$this->rotas["GET"][$nome_rota] = $dados;
		}
		
		public function post(string $nome_rota, array $dados)
		{
			$this->rotas["POST"][$nome_rota] = $dados;
		}
		
		public function verificar_rota($metodo, $nome_rota)
		{
			if(isset($this->rotas[$metodo][$nome_rota]))
			{
				$dados = $this->rotas[$metodo][$nome_rota];
				$method = $dados[1];
				$obj = new $dados[0]();
				return $obj->$method();
			}
			exit("Rota é inválida");
		}
	}//fim da classe
	//instanciar um objeto classe Rotas
	$route = new Rotas();
	$route->get("/",[InicioController::class,"inicio"]);
	
	//rotas de categoria
	$route->get("/categoria",[CategoriaController::class,"listar"]);
	
	$route->get("/inserir_categoria",[CategoriaController::class,"inserir"]);
	
	$route->post("/inserir_categoria",[CategoriaController::class,"inserir"]);
	
	$route->get("/excluir_categoria",[CategoriaController::class,"excluir"]);
	
	$route->get("/alterar_categoria",[CategoriaController::class,"alterar"]);
	
	$route->post("/alterar_categoria",[CategoriaController::class,"alterar"]);
	
	//rotas de produto
	
	$route->get("/produto",[ProdutoController::class,"listar"]);
	$route->get("/inserir_produto",[ProdutoController::class,"inserir"]);
	$route->post("/inserir_produto",[ProdutoController::class,"inserir"]);
	$route->get("/alterar_produto",[ProdutoController::class,"alterar"]);
	$route->post("/alterar_produto",[ProdutoController::class,"alterar"]);
	$route->get("/alterar_situacao",[ProdutoController::class,"alterar_situacao"]);
	$route->get("/produtos_categoria",[ProdutoController::class,"busca_produtos_categoria"]);
	$route->get("/inserir_carrinho",[VendaController::class,"inserir_carrinho"]);
	$route->get("/mostrar_carrinho",[VendaController::class,"mostrar_carrinho"]);
	$route->get("/alterar_carrinho",[VendaController::class,"alterar_carrinho"]);
	$route->get("/excluir_carrinho",[VendaController::class,"excluir_carrinho"]);
	$route->get("/finalizar_venda",[VendaController::class,"finalizar_venda"]);
	$route->post("/finalizar_venda",[VendaController::class,"finalizar_venda"]);
	
	
	$route->get("/login",[UsuarioController::class,"verificar_login"]);
	$route->post("/login",[UsuarioController::class,"verificar_login"]);
	$route->get("/logout",[UsuarioController::class,"logout"]);
	$route->get("/inserir_usuario",[UsuarioController::class,"inserir"]);
	$route->post("/inserir_usuario",[UsuarioController::class,"inserir"]);
?>