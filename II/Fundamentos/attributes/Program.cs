using System.Reflection.Metadata;
using System.Runtime.CompilerServices;
using attributes;

//Pasagem dos parâmetros de forma nomeada, podendo estar em outra ordem
Product product1 = new Product(price:4.99, Name:"Blue book", minStock:10);

//product2.Name = "Book";
//product2.Price = 18;
//product2.Discount = 0;
//product2.MinStock = 10;
//product2.FinalPrice = product1.Price - (product1.Price * product1.Discount) - Foi deslocado para o método get do precofinal;

Product product2 = new Product("Yellow book", 18, 10);

Product.Description = "A beatiful book";

Console.WriteLine("Usando método");
Console.WriteLine("--------------------------");
Console.WriteLine("--Acessando via objeto instânciado");
product1.show();
Console.WriteLine("--Acessando via parâmetro(objeto já criado) passado na função estática");
Product.show(product1);

Console.WriteLine("--------------------------");

Console.WriteLine("--Acessando via objeto instânciado");
product2.show();
Console.WriteLine("--Acessando via parâmetro(objeto já criado) passado na função estática");
Product.show(product2);

Console.WriteLine("--------------------------");

Console.WriteLine(Product.Description);

Console.ReadKey();
