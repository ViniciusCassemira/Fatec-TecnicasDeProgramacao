<?php
	class Itens
	{
		public function __construct(private string $data_devolucao = "" , private $livro = null){}
		
		
		public function getData_devolucao()
		{
			return $this->data_devolucao;
		}
		
		public function setData_devolucao($data)
		{
			$this->data_devolucao = $data;
		}
		public function getLivro()
		{
			return $this->livro;
		}
		
		public function setLivro($livro)
		{
			$this->livro = $livro;
		}
	}
?>