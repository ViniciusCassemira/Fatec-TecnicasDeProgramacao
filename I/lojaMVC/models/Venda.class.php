<?php
	class Venda
	{
		public function __construct(private int $id_venda = 0, private string $data_venda = "", private string $forma_pagamento = "", private int $parcelas = 0, private $usuario = null){}
		
		public function getId_venda()
		{
			return $this->id_venda;
		}
		public function getData_venda()
		{
			return $this->data_venda;
		}
		public function getForma_pagamento()
		{
			return $this->forma_pagamento;
		}
		public function getParcelas()
		{
			return $this->parcelas;
		}
		public function getUsuario()
		{
			return $this->usuario;
		}
		public function getItens()
		{
			return $this->itens;
		}
		public function setItens($id_item, $quantidade, $preco_unitario, $produto)
		{
			$this->itens[] = new Itens($id_item, $quantidade, $preco_unitario, $produto);
		}
	}
?>