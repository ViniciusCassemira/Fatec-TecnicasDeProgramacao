<?php
    require_once "./produto.php";
    require_once "./fornecedor.php";

    $produto1 = new Produto("Lápis preto","Numeração 05",2.7,200);
    $produto2 = new Produto("Caixa de lápis de cor","12 lápis ",30,300);

    $fornecedor = new Fornecedor("Faber Castell","11.111.111/001-91","(11) 11111-1111",array($produto1,$produto2));

    echo "<pre>";
    var_dump($fornecedor);
    echo "</pre>";