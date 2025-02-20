<?php
	class Autor extends Pessoa
	{
		public function __construct(private string $nacionalidade = "", private array $livro = array(), string $nome = "")
		{
			parent:: __construct($nome);
		}
		
		public function getNacionalidade()
		{
			return $this->nacionalidade;
		}
		public function setNacionalidade($nacionalidade)
		{
			$this->nacionalidade = $nacionalidade;
		}
		public function getLivro()
		{
			return $this->livro;
		}
		
		public function setLivro($livro)
		{
			$this->livro[] = $livro;
		}
	}
?>