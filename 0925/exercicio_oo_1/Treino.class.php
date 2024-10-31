<?php
	class Treino
	{
		public function __construct(private int $series = 0, private int $repeticoes = 0, private  $instrutor = null, private $aluno = null, private $aparelho = null){}
		
		public function getAluno()
		{
			return $this->aluno;
		}
		
		public function getAparelho()
		{
			return $this->aparelho;
		}
		
		public function setAluno($aluno)
		{
			$this->aluno = $aluno;
		}
		
		public function setAparelho($aparelho)
		{
			$this->aparelho = $aparelho;
		}
		
		
		
		
		
		
		public function getInstrutor()
		{
			return $this->instrutor;
		}
		public function setInstrutor($instrutor)
		{
			$this->instrutor = $instrutor;
		}
		
		
		public function getSeries()
		{
			return $this->series;
		}
		
		public function getRepeticoes()
		{
			return $this->repeticoes;
		}
				
		public function setSeries($series)
		{
			$this->series = $series;
		}
		public function setRepeticoes($repeticoes)
		{
			$this->repeticoes = $repeticoes;
		}
		
	}//fim da classe
?>