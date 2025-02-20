<?php
	class Aparelho
	{
		public function __construct(private string $descritivo = "", private array $aluno = array()){}
		
		public function getAluno()
		{
			return $this->aluno;
		}
		
		public function setAluno($aluno)
		{
			$this->aluno[] = $aluno;
		}
				
		public function getDescritivo()
		{
			return $this->descritivo;
		}
				
		public function setDescritivo($descritivo)
		{
			$this->descritivo = $descritivo;
		}
		
	}//fim da classe
?>