<?php
	class Livro extends Publicacoes
	{
		public function __construct(private string $sinopse = "", private string $isbn = "", private array $genero = array(), private array $autor = array(), string $data_publicacao = "", string $titulo = "", $editora = null)
		{
			parent:: __construct($data_publicacao, $titulo, $editora);
		}
		
		public function getSinopse()
		{
			return $this->sinopse;
		}
		
		public function setSinopse($sinopse)
		{
			$this->sinopse = $sinopse;
		}
		
		public function getIsbn()
		{
			return $this->isbn;
		}
		
		public function setIsbn($isbn)
		{
			$this->isbn = $isbn;
		}
		
		public function getGenero()
		{
			return $this->genero;
		}
		
		public function setGenero($genero)
		{
			$this->genero[] = $genero;
		}
		
		public function getAutor()
		{
			return $this->autor;
		}
		
		public function setAutor($autor)
		{
			$this->autor[] = $autor;
		}
	}
?>