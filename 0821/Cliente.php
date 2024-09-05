<?php
    class Cliente
    {
        //Propriedade
        // public string $nome;
        // public string $sobrenome;
        // public string $cpf;

        //Métodos
        public function __construct(
            public string $nome ="",
            public string $sobrenome = "",
            public string $cpf ="",
            public int $id_cliente = 0){
            }
        
        public function inserir($conexao){
            $sql = "INSERT INTO cliente(nome, sobrenome, cpf) VALUES(?,?,?)";
            $stm = $conexao->prepare($sql);
            $stm->bindValue(1,$this->nome);
            $stm->bindValue(2,$this->sobrenome);
            $stm->bindValue(3,$this->cpf);
            $stm->execute();
            return "Cliente inserido com êxito";
        }
        
        public function conexao(){
            //parâmetros para abrir conexão com o banco de dados utilizando a classe PDO
            // Data Source Name -> define acesso ao banco
            $dsn = "mysql:host=localhost:3306;dbname=exemplo;charset=utf8mb4";
            //instanciando/criando um objeto da classe PDO, e é uma classe que vem com o PHP
            //usuário = root & senha = ""
            $conexao = new PDO($dsn, "root", "");
            //retornando a conexão aberta   
            return $conexao;
        }
        // public function falarOi($posicao){
        //     echo "Eu me chamo {$this->nome} e minha posicao é {$posicao}";
        // }
    }//fim classe
?>