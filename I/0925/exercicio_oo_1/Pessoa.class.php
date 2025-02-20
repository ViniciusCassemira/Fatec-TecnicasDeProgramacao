<?php
	class Pessoa
	{
		public function __construct(
			protected string $nome = "",
		 	protected string $cpf = "", 
			int $ddd = 0, 
			string $numero = "", 
			$pessoa = null, 
			protected array $telefone = array())
		{
			$this->telefone[] = new Telefone($ddd, $numero, $pessoa);
		}
		public function getTelefone()
		{
			return $this->telefone;
		}
		
		public function setTelefone($ddd, $numero, $pessoa)
		{
			$this->telefone[] = new Telefone($ddd, $numero, $pessoa);
		}
		public function getNome()
		{
			return $this->nome;
		}
		public function getCpf()
		{
			return $this->cpf;
		}
		
		public function setNome($nome)
		{
			$this->nome = $nome;
		}
		public function setCpf($cpf)
		{
			$this->cpf = $cpf;
		}
	}//fim da classe
?>