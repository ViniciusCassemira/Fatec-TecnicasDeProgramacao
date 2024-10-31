<?php
    class categoriaDAO extends Conexao{
        public function __construct(){
            parent:: __construct();
        }

        public function inserir($categoria){
            $sql = "INSERT INTO categorias(descritivo) VALUES(?)";
            try{
                $stmt = $this->db->prepare($sql);
                $stmt->bindValue(1,$categoria->getDescritivo());
                $stmt->execute();
                echo "A categoria foi inserida com êxito.";

            }catch(PDOException $e){
                echo $e->getCode();
                echo $e->getMessage();
            }
        }

        public function alterar(){

        }

        public function excluir(){

        }

        public function buscarTodas(){
            $sql = "SELECT * FROM categorias";
            try{
                $stmt = $this->db->prepare($sql);
                $stmt->execute();
                $this->db = null;
                return $stmt->fetchAll(PDO::FETCH_OBJ);
            }
            catch(PDOException $e){
                echo $e->getCode();
                echo $e->getMessage();
                die();
            }
        }
        
        public function buscarUma($id){
            $sql = "SELECT * FROM categorias WHERE id = $id";
        }
    }