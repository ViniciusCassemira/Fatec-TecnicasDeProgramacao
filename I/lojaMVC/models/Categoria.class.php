<?php
	class Categoria
	{
		public function __construct(private int $id_categoria = 0, private string $descritivo = ""){}
		public function getId_categoria()
		{
			return $this->id_categoria;
		}
		public function getDescritivo()
		{
			return $this->descritivo;
		}
		
	}//fim da classe
?>