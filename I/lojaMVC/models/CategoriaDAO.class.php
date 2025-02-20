<?php
	class CategoriaDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		
		public function inserir($categoria)
		{
			$sql = "INSERT INTO categorias (descritivo) VALUES(?)";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $categoria->getDescritivo());
				$stm->execute();
				$this->db = null;
				return "Categoria inserida com sucesso";
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				die();
			}
		}
		public function alterar_categoria($categoria)
		{
			$sql = "UPDATE categoria SET descritivo=? WHERE id_categoria = ?";
			
		}
		public function excluir_categoria($categoria)
		{
			$sql = "DELETE FROM categorias WHERE id_categoria = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $categoria->getId_categoria());
				$stm->execute();
				$this->db = null;
				return "Categoria excluida com sucesso";
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				die();
			}
		}
		public function buscar_todas()
		{
			$sql = "SELECT * FROM categorias";
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
		public function buscar_uma_categoria($categoria)
		{
			$sql = "SELECT * FROM categorias WHERE id_categoria = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $categoria->getId_categoria());
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