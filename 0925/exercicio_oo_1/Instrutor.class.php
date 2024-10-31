<?php
	class Instrutor extends Pessoa
	{
		public function __construct(private string $especialidade = "", $nome = "", $cpf = "", $ddd = 0, $numero = "", $pessoa = null)
		{
			parent:: __construct($nome, $cpf, $ddd, $numero, $pessoa);
		}
		
		public function getEspecialidade()
		{
			return $this->especialidade;
		}
				
		public function setEspecialidade($especialidade)
		{
			$this->especialidade = $especialidade;
		}
		
	}//fim da classe
?>