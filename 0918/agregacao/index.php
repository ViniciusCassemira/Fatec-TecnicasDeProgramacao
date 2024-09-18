<?php
    require_once "./produto.php";
    require_once "./categoria.php";

    $categoria1 = new Categoria('Material Escolar');
    $produto1 = new Produto('Caderno','Caderno 200 folhas',27,120,$categoria1);
    $produto2 = new Produto('apontador','cor verde',3,100,$categoria1);

    echo "<h3>Produto 1</h3>";
    echo "Nome: {$produto1->getNome()}<br>";
    echo "Descrição: {$produto1->getDescricao()}<br>";
    echo "Preco: {$produto1->getPreco()}<br>";
    echo "Estoque: {$produto1->getEstoque()}<br>";
    echo "Categoria: {$produto1->getCategoria()->getDescritivo()}<br>";
    
    echo "<h3>Produto 2</h3>";
    echo "Nome: {$produto2->getNome()}<br>";
    echo "Descrição: {$produto2->getDescricao()}<br>";
    echo "Preco: {$produto2->getPreco()}<br>";
    echo "Estoque: {$produto2->getEstoque()}<br>";
    echo "Categoria: {$produto2->getCategoria()->getDescritivo()}<br>";

    //instanciar uma categoria e associar objetos produto
    //e mostrar os dados do objeto categoria

    $categoria2 = new Categoria('Esportivo');
    $produto3 = new Produto('Tênis da nike','Tam. 42/43',220,20,$categoria2);
    $produto4 = new Produto('Bola de basquete','Oficial NBA',190,7,$categoria2);
    $produto5 = new Produto('Roupa esportiva','Tamanho G',89.90,10,$categoria2);

    $categoria2->setProduto($produto3);
    $categoria2->setProduto($produto4);
    $categoria2->setProduto($produto5);

    echo "<h3>Categoria</h3>";
    echo "Descritivo: {$categoria2->getDescritivo()}";

    echo "<h4>Produtos</h4>";
    foreach($categoria2->getProduto() as $produto){
        echo "Nome: {$produto->getNome()}<br>";
        echo "Descrição: {$produto->getDescricao()}<br>";
        echo "Preço: {$produto->getPreco()}<br>";
        echo "Estoque: {$produto->getEstoque()}<br>";
    }