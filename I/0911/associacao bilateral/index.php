<?php
    require_once "./produto.php";
    require_once "./fornecedor.php";

    $produto1 = new Produto("Lápis preto","Numeração 05",2.7,200);
    $produto2 = new Produto("Caixa de lápis de cor","12 lápis ",30,300);

    $fornecedor = new Fornecedor("Faber Castell","11.111.111/001-91","(11) 11111-1111",array($produto1,$produto2));

    $produto3 = new Produto("Borracha","Cor roxa",3.2,90);
    $fornecedor->setProduto($produto3);

    echo "<h3>Fornecedor</h3><br>";
    echo "Razão social: {$fornecedor->getRazaoSocial()}<br>";
    echo "CNPJ: {$fornecedor->getCnpj()}<br>";
    echo "Telefone: {$fornecedor->getTelefone()}<br>";
    echo "<h4>Produtos</h4>";
    foreach($fornecedor->getProduto() as $produto){
        echo "Nome: {$produto->getNome()}<br>";
        echo "Descrição: {$produto->getDescricao()}<br>";
        $preco = number_format($produto->getPreco(),2,",",".");
        echo "Preço: R$ {$preco}<br>";
        echo "Estoque: {$produto->getEstoque()}<br><br>";
    }

    //instanciar um objeto produto e associar pelo menos 2 
    //fornecedores e mostrar os dados apartir do objeto produto
    $fornecedor2 = new Fornecedor('Reino das mochilas','112233123-0000/1','11999999999');
    $fornecedor3 = new Fornecedor('Mochilas mania','0000003-0000/1','439999991234');

    $produto4 = new Produto('Mochila','Mochila pequena preta',1007.90,320,array($fornecedor2));
    $produto4->setFornecedor($fornecedor3);

    echo "<h3>Produto</h3>";
    echo "Nome: {$produto4->getNome()}<br>";
    echo "Descrição: {$produto4->getDescricao()}<br>";
    echo "Preço: R$" . number_format($produto4->getPreco() , 2, ",",".") ."<br>";
    echo "Estoque: {$produto4->getEstoque()}<br>";

    echo "<h4>Fornecedor</h4>";
    foreach($produto4->getFornecedor() as $fornecedor){
        echo "Razão Social: {$fornecedor->getRazaoSocial()}<br>";
        echo "CNPJ: {$fornecedor->getCnpj()}<br>";
        echo "Telefone: {$fornecedor->getTelefone()}<br><br>";
    }