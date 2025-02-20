<?php
	class Aluno extends Pessoa
	{
		public function __construct(private string $restricoes = "", private string $data_nascimento = "", private array $aparelho = array(), $nome = "", $cpf = "", $ddd = 0, $numero = "", $pessoa = null)
		{
			parent:: __construct($nome, $cpf, $ddd, $numero, $pessoa);
		}
		public function getAparelho()
		{
			return $this->aparelho;
		}
		
		public function setAparelho($aparelho)
		{
			$this->aparelho[] = $aparelho;
		}
		public function getRestricoes()
		{
			return $this->restricoes;
		}
		public function getData_nascimento()
		{
			return $this->data_nascimento;
		}
		
		public function setRestricoes($restricoes)
		{
			$this->restricoes = $restricoes;
		}
		public function setData_nascimento($data_nascimento)
		{
			$this->data_nascimento = $data_nascimento;
		}
	}//fim da classe
?>