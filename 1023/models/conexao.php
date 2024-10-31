<?php

class Conexao{

    public function __construct(protected $db = null){
        $dsn = "mysql:host=localhost:3306;dbname=lojamvc";

        try{
            $this->db = new PDO($dsn, 'root', 'Vinicius@2005');         
        }catch(PDOException $e){   
            echo $e->getCode();
            echo $e->getMessage();
        }
    }
}