<?php
	class Emprestimo
	{
		#adicionei o array privado no final, pois não existia
		public function __construct(private string $data_emprestimo = "", private $aluno = null, string $data_devolucao = "", $livro = null, private $itens =[])
		{
			$this->itens[] = new Itens($data_devolucao, $livro);
		}
		public function getData_emprestimo()
		{
			return $this->data_emprestimo;
		}
		
		public function setData_emprestimo($data)
		{
			$this->data_emprestimo = $data;
		}
		
		public function getAluno()
		{
			return $this->aluno;
		}
		
		public function setAluno($aluno)
		{
			$this->aluno = $aluno;
		}
		public function getItens()
		{
			return $this->itens;
		}
		
		public function setItens(string $data_devolucao = "", $livro = null)
		{
			$this->itens[] =  new Itens($data_devolucao, $livro);
		}
	}
?>