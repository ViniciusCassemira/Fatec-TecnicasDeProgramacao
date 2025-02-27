using Atributos;

Produto produto1 = new Produto("Caderno", 4.99, 100);

//passagem de parêmetros nomeados que podem estar em qualquer ordem

Produto produto2 = new Produto(preco: 15.00, estoqueMinimo: 200, Nome:"Lápis de Cor");

//produto1.Nome = "Caderno";
//produto1.Desconto = 0.05;
//produto1.EstoqueMinimo = 100;
//produto1.Preco = 10.00;
//produto1.PrecoFinal = produto1.Preco - (produto1.Preco * produto1.Desconto); foi delocado para o método get do precofinal

Produto.Descricao = "Carderno 100 fl";

Produto.Exibir(produto1);

Produto.Exibir(produto2);

Console.ReadKey();



