<?php
	require_once "Rotas.php";
	
	//autoload das classes
	spl_autoload_register(function($class){
		if(file_exists("controllers/" . $class . ".class.php"))
		{
			require_once "controllers/" . $class . ".class.php";
		}
		else if(file_exists("models/" . $class . ".class.php"))
		{
			require_once "models/" . $class . ".class.php";
		}
		else
		{
			die("Classe {$class} não existe");
		}
	});
	
	//tratar a requisição
	$nome_rota = parse_url($_SERVER["REQUEST_URI"])["path"];
	$nome_rota = substr($nome_rota,strpos($nome_rota,"/", 1));
	
	$route->verificar_rota($_SERVER["REQUEST_METHOD"], $nome_rota);
?>