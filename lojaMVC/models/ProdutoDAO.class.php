<?php
	class ProdutoDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($produto)
		{
			$sql = "INSERT INTO produtos (nome, descricao, preco, imagem, id_categoria, situacao) VALUES(?,?,?,?,?,?)";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $produto->getNome());
				$stm->bindValue(2, $produto->getDescricao());
				$stm->bindValue(3, $produto->getPreco());
				$stm->bindValue(4, $produto->getImagem());
				$stm->bindValue(5, $produto->getCategoria()->getId_categoria());
				$stm->bindValue(6, $produto->getSituacao());
				$stm->execute();
				$this->db = null;
				return "Produto inserido com sucesso";
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				die();
			}
		}
		public function alterar_produto($produto)
		{
			$sql = "UPDATE produto SET descritivo=? WHERE id_produto = ?";
			
		}
		public function excluir_produto($produto)
		{
			$sql = "DELETE FROM produtos WHERE id_produto = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $produto->getId_produto());
				$stm->execute();
				$this->db = null;
				return "produto excluida com sucesso";
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				die();
			}
		}
		public function buscar_todos()
		{
			$sql = "SELECT p.*, c.descritivo FROM produtos as p, categorias as c WHERE p.id_categoria = c.id_categoria";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				die();
			}
		}
		public function buscar_um_produto($produto)
		{
			$sql = "SELECT * FROM produtos WHERE id_produto = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $produto->getId_produto());
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				die();
			}
		}
		public function buscar_produtos_por_categoria($produto)
		{
			
			$sql = "SELECT * FROM produtos WHERE id_categoria = ? AND situacao = ?";
			
			$stm = $this->db->prepare($sql);
			$stm->bindValue(1,$produto->getCategoria()->getId_categoria());
			$stm->bindValue(2,"Ativa");
			$stm->execute();
			$this->db = null;
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		public function mudar_situacao($produto)
		{
			$sql = "UPDATE produtos SET situacao = ? WHERE id_produto = ?";
			try
			{		
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $produto->getSituacao());		
				$stm->bindValue(2, $produto->getId_produto());		
				$stm->execute();
				$this->db = null;
			}
			catch(PDOException $e)
			{
				$this->db = null;
				echo $e->getCode();
				echo $e->getMessage();
				die();
			}
		}
		public function buscar_todos_Ativos()
		{
			$sql = "SELECT p.*, c.descritivo FROM produtos as p, categorias as c WHERE p.id_categoria = c.id_categoria AND situacao = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1,"Ativa");
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				die();
			}
		}
	}//fim da classe
?>