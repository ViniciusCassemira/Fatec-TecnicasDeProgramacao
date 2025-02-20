<?php
	class Itens
	{
		public function __construct(private int $id_item = 0, private int $quantidade = 0, private float$preco_unitario = 0.00, private $produto = null){}
		
		public function getId_item()
		{
			return $this->id_item;
		}
		
		public function getQuantidade()
		{
			return $this->quantidade;
		}
		
		public function getPreco_unitario()
		{
			return $this->preco_unitario;
		}
		
		public function getProduto()
		{
			return $this->produto;
		}
	}
?>