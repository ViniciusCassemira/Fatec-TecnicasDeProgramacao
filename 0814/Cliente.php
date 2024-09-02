<?php
    class Cliente
    {
        //Propriedade
        public string $nome;
        public string $sobrenome; 
        public string $cpf;

        //Métodos
        public function inserir(){
            echo "Estou no inserir";
        }
        public function falarOi($posicao){
            echo "Eu me chamo {$this->nome} e minha posicao é {$posicao}";
        }
    }//fim classe
?>