<?php
	class Conexao
	{
		public function __construct(protected $db = null)
		{
			$parametros = "mysql:host=localhost;dbname=lojamvc";
			try
			{
				$this->db = new PDO($parametros,"root","Vinicius@2005");
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				die();
			}
		}
	}
?>