<?php
	class Aluno extends Pessoa
	{
		public function __construct(private string $ra = "", string $nome = "")
		{
			parent:: __construct($nome);
		}
		
		public function getRa()
		{
			return $this->ra;
		}
		public function setRa($ra)
		{
			$this->ra = $ra;
		}
	}
?>