<?php
	class Revista extends Publicacoes
	{
		public function __construct(private string $numero = "", private string $Issn = "", string $data_publicacao = "", string $titulo = "", $editora = null)
		{
			parent:: __construct($data_publicacao, $titulo, $editora);
		}
		
		public function getNumero()
		{
			return $this->numero;
		}
		
		public function setNumero($numero)
		{
			$this->numero = $numero;
		}
		
		public function getIssn()
		{
			return $this->Issn;
		}
		
		public function setIssn($issn)
		{
			$this->Issn = $issn;
		}
	
	}
?>