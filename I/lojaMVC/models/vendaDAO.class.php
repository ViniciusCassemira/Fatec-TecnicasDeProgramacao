<?php
	class vendaDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($venda)
		{
			$this->db->beginTransaction();
			$sql = "INSERT INTO vendas (id_usuario, data_venda,forma_pagamento, parcelas) VALUES(?,?,?,?)";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $venda->getUsuario()->getId_usuario());
				$stm->bindValue(2, $venda->getData_venda());
				$stm->bindValue(3, $venda->getForma_pagamento());
				$stm->bindValue(4, $venda->getParcelas());
				$stm->execute();
				$idvenda = $this->db->lastInsertId();
			}
			catch(PDOException $e)
			{
				$this->db = null;
				die( "Problema ao inserir a compra");
				
			}
			
			$sql = "INSERT INTO itens (id_venda, id_produto, quantidade, preco_unitario) VALUES(?,?,?,?)";
			
			foreach($venda->getItens() as $item)
			{
				try
				{
					$stm = $this->db->prepare($sql);
					$stm->bindValue(1, $idvenda);
					$stm->bindValue(2, $item->getProduto()->getId_produto());
					$stm->bindValue(3,$item->getQuantidade());
					$stm->bindValue(4,$item->getPreco_unitario());
					
					$stm->execute();
				}
				catch(PDOException $e)
				{
					$this->db->rollback();
					$this->db = null;
					return $e->getMessage();
				}
			}//fim do foreach
			$this->db->commit();
			$this->db = null;
			return "Compra finalizada com sucesso";
		}
	}
?>