<?php 
    require_once 'produto.php';

    $produto1 = new Produto('Lápis preto', 'faber castell','15','2.90');
    $produto2 = new Produto('Caderno', '200 folhas','40','27.90');

    echo $produto1->getNome() . "<br>"; //get
    $produto1->setNome('Caneta'); //set
    echo $produto1->getNome(); //get novo nome

    // $produto2 = new Produto(preco:2.00);
    
?>