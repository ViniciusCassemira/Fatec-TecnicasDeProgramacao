<?php
	class Publicacoes
	{
		public function __construct(protected string $data_publicacao = "", protected string $titulo = "", protected $editora = null){}
		
		public function getData_publicacao()
		{
			return $this->data_publicacao;
		}
		public function setData_publicacao($data)
		{
			$this->data_publicacao = $data;
		}
		
		public function getTitulo()
		{
			return $this->titulo;
		}
		
		public function setTitulo($titulo)
		{
			$this->titulo = $titulo;
		}
		
		public function getEditora()
		{
			return $this->editora;
		}
		public function setEditora($editora)
		{
			$this->editora = $editora;
		}
	}
?>